# Popup Block

A lightweight, modern popup block for WordPress that displays any content as a modal dialog.

## Features

### Trigger Modes

-   **Click trigger** - Open popup from any link or button by setting the URL to `#your-popup-id`
-   **Exit intent** - Automatically show popup when user moves cursor to leave the page

### Display Styles

-   **Centered modal** - Default full-screen overlay with centered content
-   **Left sidebar** - Slide-in panel from the left edge
-   **Right sidebar** - Slide-in panel from the right edge

### Anchor Positioning

Position popups relative to their trigger button using CSS anchor positioning:

-   **Bottom** / Bottom Start / Bottom End
-   **Top** / Top Start / Top End
-   **Left** / Left Start / Left End
-   **Right** / Right Start / Right End

Anchored popups automatically reposition when they would overflow the viewport.

### Styling Options

-   Customizable backdrop opacity (0-100%)
-   Backdrop background color support
-   Backdrop background image support
-   Full layout controls for popup content width

### Accessibility

-   Built on native HTML `<dialog>` element
-   Keyboard accessible (Escape to close)
-   Click backdrop to close
-   Add close buttons with `#close` URL

## Usage

1. Add a Popup Block to your page
2. Set an anchor/ID for the popup (e.g., `my-popup`)
3. Add your content inside the popup
4. Create a button or link with URL `#my-popup` to trigger it

### Exit Intent Popup

1. Add a Popup Block and set trigger to "On exit intent"
2. Configure cookie expiration (days before showing again)
3. The popup will appear when users move to leave the page

### Anchored Popup

1. Add a Popup Block with click trigger
2. Enable "Use Anchoring" in block settings
3. Select anchor position (bottom, top, left, right, etc.)
4. The popup will appear attached to the trigger button

## Requirements

-   WordPress 6.1+
-   PHP 7.0+

## Release Process

Releases are cut by the **Release** GitHub Actions workflow
(`.github/workflows/release.yml`), triggered manually from the Actions tab.

The workflow does everything _before_ the tag exists, then creates the tag
once and never touches it again — this keeps every tag immutable, which is
what Packagist requires (it rejects tag updates).

### Creating a release

1. Make sure `main` is green and contains the code you want to ship.
2. Go to **Actions → Release → Run workflow**.
3. Enter the version **without** a leading `v` (e.g. `1.2.3`).
4. Run it.

The workflow will then:

1. Validate the version (must be `X.Y.Z`) and fail fast if the `vX.Y.Z` tag
    already exists.
2. Build the production assets (`npm ci && npm run build`).
3. Stamp the version into `popup.php`, replacing the `__VERSION__` placeholder.
4. Commit the built assets and stamped version, create an annotated tag
    `vX.Y.Z` pointing at that commit, and push the tag — once, never
    force-pushed.
5. Build the distribution ZIP with `npm run plugin-zip` (`popup.zip`) and
    publish a GitHub release with auto-generated notes.

The version on `main` is always the literal placeholder `__VERSION__`; the real
number only ever exists inside a release tag. Follow
[Semantic Versioning](https://semver.org/). Because tags are immutable, if a
release was wrong, **publish a new patch version** rather than trying to move a
tag.

## License

GPL-2.0-or-later
