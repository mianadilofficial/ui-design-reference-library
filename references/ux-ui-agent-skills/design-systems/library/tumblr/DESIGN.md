---
version: alpha
name: Tumblr
category: "Media & Consumer Tech"
description: "Tumblr's logged-out explore dashboard — a navy #001935 chrome around white #ffffff post cards, Favorit / Favorit Modern type at 16px/24px, a #00b8ff pill Sign up button with black text, a black #000000 pill on the #7c5cff sign-up banner, 8px card corners and 9999px pills."
colors:
  canvas: "#001935"
  ink: "#ffffff"
  primary: "#00b8ff"
  on-primary: "#000000"
  button-dark: "#000000"
  on-button-dark: "#ffffff"
  surface-post: "#ffffff"
  surface-panel: "#0d243f"
  brand-purple: "#7c5cff"
  ink-post-secondary: "#4c5e72"
  ink-tertiary: "#99a3ae"
  ink-on-dark-muted: "#ffffff99"
  hairline: "#ffffff0d"
  button-secondary-bg: "#0000001a"
typography:
  display:
    fontFamily: Favorit, "Helvetica Neue", HelveticaNeue, Helvetica, Arial, sans-serif
    fontSize: 21px
    fontWeight: 700
    lineHeight: 25.2px
  display-mobile:
    fontFamily: Favorit, "Helvetica Neue", HelveticaNeue, Helvetica, Arial, sans-serif
    fontSize: 18px
    fontWeight: 700
    lineHeight: 23.9999px
  body:
    fontFamily: Favorit, "Helvetica Neue", HelveticaNeue, Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: "\"Favorit Modern\", \"Helvetica Neue\", HelveticaNeue, Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 20px
  input:
    fontFamily: "\"Favorit Modern\", \"Helvetica Neue\", HelveticaNeue, Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 350
    lineHeight: 24px
rounded:
  xs: 3px
  sm: 4px
  md: 8px
  lg: 16px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 3px
  s4: 4px
  s5: 5px
  s6: 6px
  s7: 8px
  s8: 10px
  s9: 12px
  s10: 14px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
  button-dark:
    backgroundColor: "{colors.button-dark}"
    textColor: "{colors.on-button-dark}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 10px 16px
    height: 40px
  button-secondary:
    backgroundColor: "{colors.button-secondary-bg}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 10px 16px
    height: 40px
  tab-link:
    textColor: "{colors.ink}"
    typography: "{typography.display-mobile}"
    padding: 14px 16px
    boxShadow: rgb(0, 184, 255) 0px -2px 0px 0px inset
  post-header:
    textColor: "{colors.button-dark}"
    rounded: "{rounded.md}"
    padding: 12px 12px 12px 14px
  nav-link:
    textColor: "{colors.button-dark}"
    typography: "{typography.body}"
    rounded: "{rounded.md}"
  text-input:
    textColor: "{colors.ink-tertiary}"
    typography: "{typography.input}"
    padding: 8px
    height: 40px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
  post-footer:
    textColor: "{colors.ink-post-secondary}"
---

# Tumblr

## Overview

The measured page is the logged-out Tumblr home at `https://www.tumblr.com`, which resolved to `https://www.tumblr.com/?redirect_to=%2F&source=explore_login_wall` — the public explore dashboard that Tumblr serves to visitors who are not signed in. It is the real product surface, not a marketing page: a dark navy application chrome (`#001935`) frames a feed of white post cards filled with user art, text posts, reblogs, hashtags and engagement counters. The page title is simply "Tumblr" and the document language is `en-US`.

The visual identity is a two-tone system. The *chrome* — left sidebar, top tabs, right rail, page background — is deep navy with white and grey-blue type. The *content* — every post — is a white card with black text. A single electric blue, `#00b8ff`, carries the brand's interactive accent: the logged-out Sign up button, the active-tab underline on "Trending", the "Show more blogs" link and the focus ring. A purple `#7c5cff` appears as a sign-up banner surface, and five tinted category chips (yellow, orange, red, pink, purple, green at 30% alpha) colour tag pills.

Density is high and the voice is the users': hashtags such as `#digital art`, `#knights of guinevere`, `#illustration`, short captions, and counts like "3.6K" reblogs and "5.4K" likes. Tumblr's own microcopy is short and informal — "Sign up", "Log in", "Explore", "Communities", "Change palette", "Show more blogs", "See all", "Expand". Tumblr's official logo page sets the tone for its brand writing: under the heading "Make sure there's some padding around it", it says "Seriously, it looks ridiculous when you thrust one of these right up against the edge of a container."

## Colors

Every color below was measured on the live page (`web/data/extracted/tumblr.json`) and most also exist as named CSS custom properties in Tumblr's shipped stylesheet.

- **canvas `#001935`** — the page and chrome background, the largest background by area. It is also the `--chrome`, `--side-menu`, `--top-menu` and `--content-ui` variables (`rgba(0, 25, 53, 1)`).
- **ink `#ffffff`** — the most-read readable text on the navy chrome: tab labels, sidebar items, headings in the rail (`--chrome-fg`).
- **primary `#00b8ff`** — Tumblr blue. Measured as the background of the sidebar "Sign up" button in the focus probe (`rgb(0, 184, 255)` with black text), as a text color (the "Show more blogs" link), as the 2px inset underline of the active "Trending" tab, and as the 2px focus outline. The stylesheet names it `--brand-blue`, `--accent`, `--chrome-ui` and `--chrome-ui-focus`.
- **on-primary `#000000`** — the text color on the blue Sign up button (focus probe).
- **button-dark `#000000` / on-button-dark `#ffffff`** — the second Sign up button, a black pill with white text, which the extractor recorded as the primary CTA candidate; it sits on the purple sign-up banner.
- **surface-post `#ffffff`** — post cards; second-largest background by area (`--content-panel`).
- **surface-panel `#0d243f`** — slightly lifted navy used for chrome panels (`--chrome-panel`).
- **brand-purple `#7c5cff`** — the sign-up banner surface; `--education` / brand purple in the stylesheet.
- **ink-post-secondary `#4c5e72`** — the second most-read text color: post timestamps, counters and footers (`--content-fg-secondary`).
- **ink-tertiary `#99a3ae`** — placeholder text in the search input and tertiary chrome text (`--content-fg-tertiary`, `--chrome-fg-secondary`).
- **ink-on-dark-muted `#ffffff99`** — 60% white secondary text on the navy chrome.
- **hairline `#ffffff0d`** — the only measured border color, a 5% white rule on navy (`--chrome-panel-border`).
- **button-secondary-bg `#0000001a`** — the 10% black fill of the "Log in" pill on the banner.

Post body text inside the white cards is `#000000` (`--content-fg`), the most-read text color by character count. The stylesheet also ships a full semantic palette — `--danger` `rgba(255, 73, 48, 1)`, `--success` `rgba(1, 207, 53, 1)`, `--brand-pink` `rgba(255, 97, 206, 1)`, `--brand-orange` `rgba(255, 138, 0, 1)`, `--brand-yellow` `rgba(232, 215, 58, 1)` — whose 30% tints appear as tag-chip backgrounds on this page.

## Typography

Tumblr ships two proprietary families, both loaded on the page: **Favorit** (400, 400 italic, 700, 700 italic) and **Favorit Modern** (350 and 500). Favorit carries 5,696 of the measured characters and Favorit Modern 490. The stylesheet exposes them as `--font-family` (`"Favorit", "Helvetica Neue", "HelveticaNeue", Helvetica, Arial, sans-serif`) and `--font-family-modern` (`"Favorit Modern", …`). Substitute: the declared fallback stack, Helvetica Neue then Helvetica then Arial.

- **display** — Favorit 21px / 700 / 25.2px. The largest measured heading, the right-rail module title ("Sponsored").
- **display-mobile** — Favorit 18px / 700 / 23.9999px. The "Trending" tab label, recorded as the heading at the 390px mobile width.
- **body** — Favorit 16px / 400 / 24px. Post text; 16px is by far the most-read size and `--base-font-size` is `16px`.
- **button** — Favorit Modern 14px / 500 / 20px. Sign up and Log in pills.
- **input** — Favorit Modern 16px / 350 / 24px. The search field, the only use of the 350 weight.

Other measured sizes: 13px (604 characters — tags and meta), 14px, 12px (post footers, `#4c5e72` at 500), 18px tab labels, 12.5px and a 26px/400 heading inside a user post. Weights in use are 400, 500, 700, 900 and 350. Letter-spacing is `normal` throughout; no uppercase transforms were measured.

## Layout

At the 1280px desktop width, the measured page is one continuous navy band 11,926px tall. The content area runs from x=270 to x=1251, and the extractor recorded two content columns plus up to five card columns in the feed's carousels. The capture shows the structure: a fixed left sidebar with the Tumblr wordmark and the Explore / Communities / Change palette / Sign up / Log in items; a top row of explore tabs (Trending is active, underlined in blue); a two-column masonry feed of post cards; and a right rail with "Trending Blogs" and a sponsored unit.

Spacing is small and tight. The stylesheet's scale is `--space-xxxs` 2px, `--space-xxs` 4px, `--space-m` 16px, `--space-l` 20px, `--space-xl` 24px, `--space-xxl` 28px, `--space-xxxl` 32px. The most-used measured paddings are 4px, 2px, 6px, 8px, 16px and 12px; the most-used flex gaps are 4px, 6px, 8px and 12px. Post headers pad 12px 12px 12px 14px; explore tabs pad 14px 16px; pills pad 10px 16px.

## Elevation & Depth

Depth comes from colour contrast more than shadow: white cards on navy need no shadow to lift. The measured shadows are few:

- `rgba(255, 255, 255, 0) 0px 0px 0px 1px` — a transparent 1px ring on 20 elements (a placeholder ring that only becomes visible in other states).
- `rgba(0, 0, 0, 0.1) 0px -2px 20px 0px` — an upward soft shadow on 8 elements.
- `rgba(0, 0, 0, 0.5) 0px 0px 15px 0px` — one heavier glow.
- `rgb(0, 184, 255) 0px -2px 0px 0px inset` — the active tab's 2px blue underline, drawn as an inset shadow.

Overlay tints in the stylesheet are navy-based (`--overlay-tint` `rgba(0, 25, 53, 0.2)` up to `--overlay-tint-heavy` 0.8), and image tints are black (`--image-tint` 0.4).

## Shapes

The radius scale mixes square-ish content corners with full pills. Measured frequencies: `9999px` on 168 elements (buttons, avatars-in-pills, chips), `16px` on 139, `4px` on 66, `8px` on 41, `8px 8px 0px 0px` on 40 (post headers — the card's top corners), `3px` on 24. The tokens are xs 3px, sm 4px, md 8px, lg 16px and pill 9999px. The stylesheet names them semantically: `--radius-button` and `--radius-round` 9999px, `--radius-panel` 8px, `--radius-post-image` 4px, `--radius-badge` 4px, `--radius-m` and `--radius-modal-m` 16px, `--radius-l` and `--radius-modal-l` 20px, `--radius-label` 2px.

## Components

- **button-primary** — the logged-out sidebar Sign up: `#00b8ff` fill, `#000000` label, Favorit Modern 14px/500, 9999px pill. On keyboard focus it gains `2px solid rgb(0, 184, 255)` outline at 2px offset (measured). Its padding and height were not measured separately.
- **button-dark** — the black Sign up pill on the purple banner: `#000000` fill, white label, 10px 16px padding, 40px tall; focus outline `2px solid rgb(0, 0, 0)` at 2px offset.
- **button-secondary** — the "Log in" pill beside it: `#0000001a` fill, white label, same 10px 16px / 40px geometry. The sidebar Log in uses `rgba(255, 255, 255, 0.05)` instead.
- **tab-link** — explore tabs ("Trending"): white Favorit 18px/700, 14px 16px padding, active state marked by the 2px inset `#00b8ff` underline.
- **post card** — white surface, header row with avatar, blog name, age ("2d") and a "…" menu, padding 12px 12px 12px 14px, top corners `8px 8px 0 0`; image or text body; tag list; footer of comment / reblog / like / share icons with `#4c5e72` counts in 12px Favorit Modern.
- **text-input** — search: `#99a3ae` placeholder, Favorit Modern 16px/350, 8px padding, 40px tall.
- **ctaOutlined link** — "Show more blogs": `#00b8ff` Favorit 16px/700 text, no fill.

## Design System Architecture

Tumblr publishes no public component design system or token documentation. Its official brand page is the logo page at https://www.tumblr.com/logo, which offers black and white logo files, a "Download Everything" bundle and one written rule ("Make sure there's some padding around it"), and points to trademark terms at https://www.tumblr.com/docs/trademark_guidelines (not opened).

The de-facto system is visible in the shipped CSS: 400 custom properties on the root, organised in clear layers. A raw palette (`--color-blue-30`, `--color-orange-50`, `--color-gray-15`, tint ramps like `--color-pink-tint-40`); brand colours with interaction states (`--brand-blue`, `--brand-blue-hover` `rgba(51, 198, 255, 1)`, `--brand-blue-pressed` `rgba(102, 212, 255, 1)`, `-tint`, `-tint-strong`); and semantic surface roles split into **chrome** (`--chrome`, `--chrome-fg`, `--chrome-ui`, `--chrome-panel`) versus **content** (`--content-panel`, `--content-fg`, `--content-fg-secondary`) versus **image** overlays (`--image-fg`, `--image-tint`). That chrome/content split is exactly why the "Change palette" item exists in the sidebar: palettes re-map the chrome variables while post content stays legible. Radii and spacing are also tokenised (`--radius-*`, `--space-*`).

## Do's and Don'ts

**Do**
- Keep the chrome navy `#001935` and the posts white `#ffffff`; the contrast between them is the layout.
- Use `#00b8ff` sparingly for the one primary action, the active-tab underline and focus rings.
- Set post text in Favorit 16px/24px black, and UI controls in Favorit Modern 14px/500.
- Use 9999px pills for buttons and 8px corners for post cards.
- Let user content (art, tags, counts) carry the visual interest; the chrome stays quiet.
- Give the logo padding — Tumblr's own rule.

**Don't**
- Don't put long-form copy directly on the navy chrome; content belongs in white cards.
- Don't introduce heavy drop shadows; the measured shadows are soft or transparent.
- Don't use the tag-chip tints (30% yellow, orange, red, pink, purple, green) as button fills.
- Don't mix in a second sans-serif; Favorit and Favorit Modern cover every role.
- Don't treat the purple `#7c5cff` banner colour as the main CTA; the sidebar CTA is blue.

## Responsive Behavior

The extractor's mobile pass at 390px recorded: one visible header link and a visible menu toggle labelled "Menu" (desktop: three header links, no toggle); a 44px-tall navy `#001935` nav row with `0px 5px` padding; the "Trending" tab as the largest heading at 18px/700; and post body text at 13px/19.5px rather than 16px. The mobile bands measured a 229px navy top area, then alternating media and white post bands running edge to edge from x=4–10 to x=377–380. Most-read mobile sizes were 16px, 13px, 14px, 18px and 26px. The mobile primary CTA candidate was a yellow `#e8d73a` hashtag chip, which is content rather than a brand button. Breakpoints and sidebar behaviour between 390px and 1280px were not measured.

## Iteration Guide

1. Start with the two surfaces: navy `#001935` for everything that is the app, white `#ffffff` for everything that is a post.
2. Load Favorit and Favorit Modern (or the Helvetica Neue fallback stack) and set the base at 16px/24px.
3. Build the sidebar CTA as a `#00b8ff` pill with black Favorit Modern 14px/500 text; add the `2px solid #00b8ff` focus outline with 2px offset.
4. Build post cards with `8px 8px 0 0` header corners, a 12px 12px 12px 14px header, and a `#4c5e72` 12px footer of counts.
5. Mark the active tab with the `rgb(0, 184, 255) 0px -2px 0px 0px inset` underline, not a fill.
6. When adding colour, reach for the stylesheet's brand ramps (`--brand-*`, `-hover`, `-pressed`, `-tint`) instead of new hexes.
7. Compare against the capture: if a screen has more blue than the Sign up button, the active tab and links, it has drifted.
