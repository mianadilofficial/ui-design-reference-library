---
version: alpha
name: Zed Industries
category: "Developer Tools & IDEs"
description: "The zed.dev home page as Zed Industries runs it — IBM Plex Serif headings at 25.6px/390 and iA Writer Quattro body at 14px on a warm #eee7e7 textured field with white #ffffff panels, Zed brand blue #1348dc and Delta red #bf3c27 Download buttons with a 4px radius and an inset bottom shadow, and a live-looking editor mock built from #dcdcdd, #fafafa and #f5f5f5 surfaces."
colors:
  canvas: "#f5f5f5"
  page-body: "#ffffff"
  page-largest: "#eee7e7"
  ink: "#242529"
  primary: "#1348dc"
  on-primary: "#ffffff"
  primary-hover: "#0640ac"
  delta-red: "#bf3c27"
  delta-red-hover: "#a93523"
  button-secondary: "#e5e5e5"
  button-secondary-hover: "#d4d4d4"
  button-secondary-text: "#262626"
  surface-sidebar: "#dcdcdd"
  surface-editor: "#fafafa"
  ink-muted: "#525252"
  ink-ui-muted: "#58585a"
  ink-code: "#4d4f52"
  syntax-blue: "#3882b7"
  syntax-indigo: "#5b79e3"
  syntax-purple: "#a449ab"
  hairline: "#dfdfe0"
  link: "#0a0a0a"
  button-primary-border: "#69ffff66"
typography:
  display:
    fontFamily: plexSerif, "plexSerif Fallback"
    fontSize: 25.6px
    fontWeight: 390
    lineHeight: 32px
  heading:
    fontFamily: plexSerif, "plexSerif Fallback"
    fontSize: 18.4px
    fontWeight: 410
    lineHeight: 22.08px
  body:
    fontFamily: writer, "writer Fallback"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  button:
    fontFamily: writer, "writer Fallback"
    fontSize: 13px
    fontWeight: 400
    lineHeight: 19.5px
  link:
    fontFamily: plexSerif, "plexSerif Fallback"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 2px
  sm: 3px
  md: 4px
  lg: 6px
  xl: 8px
  2xl: 16px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 6px
  s5: 8px
  s6: 12px
  s7: 16px
  s8: 20px
  s9: 24px
  s10: 40px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 6px 4px
    height: 34px
    borderColor: "{colors.button-primary-border}"
    boxShadow: rgb(5, 55, 148) 0px -2px 0px 0px inset, rgb(230, 239, 254) 0px 1px 3px 0px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    boxShadow: none
  button-delta:
    backgroundColor: "{colors.delta-red}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 6px 4px
    height: 34px
    boxShadow: rgb(127, 39, 26) 0px -2px 0px 0px inset, rgb(251, 236, 234) 0px 1px 3px 0px
  button-delta-hover:
    backgroundColor: "{colors.delta-red-hover}"
    boxShadow: none
  button-secondary:
    backgroundColor: "{colors.button-secondary}"
    textColor: "{colors.button-secondary-text}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 6px 4px
    height: 34px
    boxShadow: rgb(209, 209, 209) 0px -2px 0px 0px inset, rgb(242, 242, 242) 0px 1px 3px 0px
  button-secondary-hover:
    backgroundColor: "{colors.button-secondary-hover}"
    boxShadow: none
  link:
    textColor: "{colors.link}"
    typography: "{typography.link}"
    padding: 16px
  code-panel:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.syntax-purple}"
    rounded: "{rounded.md}"
    borderColor: "{colors.hairline}"
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0.03) 0px 1px 4px 0px inset
  footer:
    textColor: "{colors.link}"
    padding: 16px
---

# Zed Industries (zed.dev)

## Overview

At the time of measurement, zed.dev does not open on a single-product editor landing page. It opens on a compact
company index headed **"Zed Industries"** with the line *"Advancing the state of the art for collaborative software
development."* Two product tiles sit side by side under it: **Delta** ("A multiplayer environment for coding with
agents, powered by DeltaDB", marked "Est 2026") and **Zed** ("The world's fastest IDE. Open source. AI optional.",
marked "Est 2021"). Each tile pairs a large square logo block — a red triangle mark for Delta, the blue "Z" maze mark for
Zed — with a serif title, an italic two-line description and a Download / Learn More button pair. The browser title
still reads "Zed — Your last next editor"; the brand page states that "The text editor is called 'Zed'. The company that
develops Zed is called 'Zed Industries'", so this file is named after the company page the URL now serves.

Below the tiles, a full-width editor mock takes most of the fold: a project sidebar with pinned threads, an agent
conversation pane with inline diffs and a comment thread, and a "Changes" diff view of `sum_tree.rs` with red and green
change rows. It is drawn in HTML, not a screenshot, so its colors were measured along with the page. A three-column
strip links Agent Client Protocol, GPUI and Tree-sitter, and a short footer carries "Zed Industries · Jobs · Values ·
Team · Dark".

The tone is a craft-tool tone: a warm, faintly textured paper field (#eee7e7), a serif display face, a writer's
monospace-flavoured body face, and buttons with a hard inset bottom edge that make them read as physical keys. Copy is
short and declarative.

## Colors

Measured roles (desktop, 1280px):

- **Page field** — `page-largest` #eee7e7 is the largest painted area: the warm pinkish-grey textured background
  around the centred column. The capture's dominant on-screen sample is close to it.
- **Body / panels** — `page-body` #ffffff is the body background; `canvas` #f5f5f5 is the light panel grey used for the
  code blocks inside the editor mock.
- **Ink** — `ink` #242529 is the most-read text color (mostly the editor mock's UI text). Headings and the link strip
  use `link` #0a0a0a; the tagline and product descriptions use `ink-muted` #525252; mock UI labels use `ink-ui-muted`
  #58585a and `ink-code` #4d4f52.
- **Brand blue** — `primary` #1348dc fills the Zed Download button. The official brand page lists Brand Blue as
  `#1348DC`, alongside pure black and pure white, as the only colors the Zed logo may be rendered in. Hovering the
  button changes the fill to `primary-hover` #0640ac (measured as rgb(6, 64, 172)) and removes the inset shadow.
- **Delta red** — `delta-red` #bf3c27 fills the Delta Download button; on hover it becomes `delta-red-hover` #a93523.
  Delta red is a product color, not the Zed brand color — keep it on Delta surfaces only.
- **Secondary buttons** — `button-secondary` #e5e5e5 with `button-secondary-text` #262626; hover fill #d4d4d4.
- **Editor mock surfaces** — `surface-sidebar` #dcdcdd (sidebar), `surface-editor` #fafafa (pane headers),
  `hairline` #dfdfe0 (dividers and panel borders).
- **Syntax** — `syntax-blue` #3882b7, `syntax-indigo` #5b79e3 and `syntax-purple` #a449ab are the code highlighting in
  the mock (keywords, types, module names).
- **Primary button border** — `button-primary-border` #69ffff66 is a translucent cyan 1px edge on the blue button.

Diff rows in the mock use soft green (#cde4d6, #daf1e2) and pink (#e6d1d5, #fdded8) fills; these were measured in the
background frequencies and belong to the code view only.

## Typography

Three families were loaded and their files are named in the page's font requests:

- **plexSerif** — served as `IBMPlexSerif_Var` (IBM Plex Serif, variable 300–700, roman and italic). Used for the
  display heading "Zed Industries" at **25.6px / 32px, weight 390**, product titles at **18.4px / 22.08px, weight
  410**, and the link strip titles at **16px / 24px, weight 400**. The odd weights (390, 410) are only possible because
  the face is variable.
- **writer** — served as `iAWriterQuattroS` (iA Writer Quattro S). Used for body copy at **14px / 20px, weight 400**
  (the tagline) and for buttons at **13px / 19.5px, weight 400**. The italic cut sets the tagline and product
  descriptions.
- **Lilex** — a monospace file (`Lilex_Regular`) is requested for code in the editor mock.

The editor mock dominates the character count: 11px is the most frequent size on the page, followed by 10px, 12px and
13px. Body prose at 14px is a small share of the page. Substitutes if the served files are not available to you: a
transitional serif with a variable weight axis for plexSerif, a duospaced or monospace-flavoured sans for writer, and
any coding monospace for Lilex.

Headings are set sentence case, never uppercase; letter-spacing is normal throughout.

## Layout

The desktop page is a single centred column (content from x≈145 to x≈1275 at 1280px in the band measurement) framed by
hairline rules on the textured field. The order:

1. Header block: "Zed Industries" display line and italic tagline, left-aligned.
2. Two product tiles in two columns, each a square logo block plus a text block with a right-aligned italic "Est"
   year in the corner, then a pair of equal-width buttons.
3. The full-width editor mock (three panes: sidebar, agent thread, diff view).
4. A three-column link strip (Agent Client Protocol, GPUI, Tree-sitter), each with a ↗ arrow, separated by hairlines.
5. A one-line centred footer.

The whole page is 1132px tall at desktop — there is no long scroll and no site navigation bar (the extraction counted 0
visible header links and no menu toggle). The maximum card row has 3 columns. Spacing steps measured on the page run
1, 2, 4, 6, 8, 12, 16, 20, 24 and 40px; the link strip and footer use 16px padding.

## Elevation & Depth

Depth is almost entirely tactile rather than floating:

- **Buttons** carry a 2px inset shadow on their bottom edge in a darker shade of their own fill — `rgb(5, 55, 148)` on
  blue, `rgb(127, 39, 26)` on red, `rgb(209, 209, 209)` on grey — plus a soft 1px 3px outer glow in a pale tint of the
  fill. On hover the whole shadow is removed (`boxShadow: none`) and the fill darkens, so the key appears pressed.
- **Code panels** use a faint inner shadow, `rgba(0, 0, 0, 0.03) 0px 1px 4px 0px inset`, and a #dfdfe0 border.
- **Pane rings** — the most frequent shadow is a 1px ring in rgb(235, 235, 236), used as a border substitute in the
  editor mock.

There are no large drop shadows, no blur, and no overlapping layers on the page.

## Shapes

Radii are small. The button radius is **4px** (`md`), the most frequent radius on the page. Smaller values — **2px**
and **3px** — appear on inline chips and tab corners inside the mock; **6px** and **8px** occur once or twice; **16px**
appears as a top-only rounding on the editor window. A **9999px** pill radius is used for avatars in the mock. The
product logo blocks and the outer frame are square. The visual identity relies on straight rules and near-square
corners; nothing on the page is a soft blob or a heavily rounded card.

## Components

- **Primary button (Zed Download)** — #1348dc fill, white 13px writer text, 4px radius, 34px tall, 6px 4px padding,
  1px #69ffff66 border, inset bottom shadow. Hover: #0640ac, shadow removed. Focus measured on the red button: a 2px
  solid white outline.
- **Delta button** — same geometry in #bf3c27 with its own red inset shadow; hover #a93523.
- **Secondary button (Learn More)** — #e5e5e5 fill, #262626 text, grey inset shadow; hover #d4d4d4. It sits next to
  the Download button at equal width.
- **Product tile** — square logo block (brand color field with a white line-art mark), serif 18.4px title, italic
  description in #525252, "Est 2021"/"Est 2026" in italic at the top right, buttons along the bottom.
- **Link strip item** — serif 16px title with a ↗ arrow and a one-line description; hover adds a translucent grey fill.
- **Editor mock** — sidebar (#dcdcdd), pane headers (#fafafa), code panels (#f5f5f5, 4px radius, #dfdfe0 border,
  inset shadow), syntax colors, diff rows in green and pink, small avatar pills. Mock rows highlight to #dfdfe0 on hover.
- **Footer** — "Zed Industries" with underlined Jobs / Values / Team links and a Dark toggle.

## Design System Architecture

Zed publishes a brand page at https://zed.dev/brand with logo files, app icons, naming rules ("Zed" for the editor,
"Zed Industries" for the company) and three permitted logo colors: Brand Blue #1348DC, pure black and pure white. It
does not publish a web design system or token package; the page states no typeface or spacing rules.

The shipped CSS shows the de-facto system. Assets are served from `/_next/static/` (a Next.js build) and `:root` exposes
Tailwind variables (`--tw-*`, `--color-neutral-*`, `--color-blue-700`, `--color-offgray-*`, `--color-cream-200/300` defined with
`color-mix(in oklch, …)`, `--container-md: 28rem`, `--tracking-wider: .05em`, `--ease-in`). A consent-manager layer
adds `--c15t-*` variables (radius, surface hover, font sizes); that layer is third-party and not part of the brand.
The "cream" and "offgray" ramps are custom additions on top of Tailwind's palette and explain the warm field and the
blue-grey UI text. Fonts are self-hosted from `/_next/static/media/`.

## Do's and Don'ts

**Do**
- Use #1348dc as the single Zed action color, with white text and the inset bottom edge.
- Pair IBM Plex Serif headings with iA Writer Quattro body text; keep headings sentence case.
- Keep radii at 4px for controls and keep containers square-cornered.
- Show the product working — a real-looking editor with real code and diffs — rather than abstract illustration.
- Use hairlines (#dfdfe0) and a warm paper field (#eee7e7) to separate regions instead of shadows.

**Don't**
- Don't render the Zed logo in any color other than brand blue, white or black (brand page rule).
- Don't use Delta red #bf3c27 for Zed actions; it identifies the Delta product.
- Don't add large drop shadows, gradients behind text, or heavily rounded cards.
- Don't treat the consent-manager (`--c15t-*`) styles as brand styles.
- Don't set long body copy in the serif; prose on the page is in the writer face.

## Responsive Behavior

Measured at a 390px mobile viewport:

- Content spans x 8–390 in a single column (1 column recorded in the mobile band).
- The display heading stays at 25.6px / 32px; product titles measure 18px / 21.6px (desktop 18.4px).
- Body stays 14px / 20px; the tagline wraps to two lines (40px tall).
- The Zed Download button stays 34px tall with the same 4px radius and inset shadow, and is 358px wide — the full
  content width.
- Delta's title is recorded at y=335 and Zed's at y=684, so the two product tiles appear one after the other, not side
  by side.
- No header links or menu toggle were recorded on mobile either.

Behaviour of the editor mock at mobile width beyond these positions was not measured.

## Iteration Guide

1. Start from the warm field #eee7e7, white body, and a centred column bounded by hairlines.
2. Set the heading in IBM Plex Serif at 25.6px/390 and the tagline in iA Writer Quattro italic at 14px in #525252.
3. Build product tiles: square color block with a line-art mark, 18.4px serif title, italic description, Download +
   Learn More at 34px tall and 4px radius.
4. Apply the inset-edge button shadow and remove it on hover while darkening the fill (#1348dc → #0640ac).
5. Use real product UI (an editor with code, diffs and threads) as the hero image, styled with #dcdcdd / #fafafa /
   #f5f5f5 surfaces and syntax colors #3882b7, #5b79e3, #a449ab.
6. Finish with a three-up link strip and a single-line footer; check that no element exceeds a 16px radius except
   avatar pills.
