---
version: alpha
name: Meta
category: "E-commerce & Retail"
description: >-
  Meta's corporate "about" page (meta.com/about) is a white page with one saturated blue action, #0064e0, on fully rounded 100px pill buttons 44px tall, set in the Optimistic VF variable typeface (48px/500 headline with 0.576px tracking, 18px body) in cool blue-gray inks (#1c2b33, #5d6c7b), with 24px-radius #f8f9fb cards and a full-bleed photographic video hero under a translucent white header.

colors:
  canvas: "#ffffff"
  ink-muted: "#5d6c7b"
  primary: "#0064e0"
  on-primary: "#ffffff"
  surface-dark: "#000000"
  surface-card: "#f8f9fb"
  ink: "#1c2b33"
  ink-deep: "#0a1317"
  ink-slate: "#465a69"
  ink-faint: "#768591"
  hairline: "#cbd2d9"
  primary-hover: "#0050b3"
  nav-text: "#1c1e21"
  nav-link-text: "#385898"
  card-border: "#f8f9fb33"
typography:
  display:
    fontFamily: "\"Optimistic VF\", Helvetica, Arial, sans-serif"
    fontSize: 48px
    fontWeight: 500
    lineHeight: 57.6px
    letterSpacing: 0.576px
  display-mobile:
    fontFamily: "\"Optimistic VF\", Helvetica, Arial, sans-serif"
    fontSize: 36px
    fontWeight: 500
    lineHeight: 43.2px
    letterSpacing: 0.36px
  body:
    fontFamily: "\"Optimistic VF\", Helvetica, Arial, sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 27px
  button:
    fontFamily: "\"Optimistic VF\", Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 22.4px
    letterSpacing: 0.08px
  nav:
    fontFamily: Helvetica, Arial, sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 16.08px
rounded:
  xs: 24px
  sm: 32px
  md: 100px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 8px
  s4: 11px
  s5: 12px
  s6: 16px
  s7: 20px
  s8: 24px
  s9: 32px
  s10: 36px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 11px 20px
    height: 44px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 11px 20px
    height: 44px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    padding: 3px 15px 3px 36px
  nav:
    textColor: "{colors.nav-text}"
  nav-link:
    textColor: "{colors.nav-link-text}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.nav-text}"
    rounded: "{rounded.xs}"
    padding: 16px 24px
    borderColor: "{colors.card-border}"
  footer:
    textColor: "{colors.nav-text}"
---

## Overview

The measured page is the Meta company site (`about.meta.com` redirects to `https://www.meta.com/about/`; 1280px desktop and 390px mobile). It is a corporate, editorial page: a top navigation bar, a full-width photographic hero with a white headline, and long white sections that introduce the company's mission, technologies, safety and privacy topics, leadership and news, each ending in a blue pill button.

What the first screen of the capture shows:

- A 64px header with the infinity-style Meta logo and `Meta` wordmark at the left, text links `AI glasses`, `Meta Quest`, `Meta VR Glasses` and `Muse Charm`, and on the right `Explore Meta`, a gray pill labeled `Support`, a shopping-bag icon and an account icon. The header is semi-transparent white over the content.
- An open `Support` dropdown at capture time. It is a wide translucent panel with three columns: `Store and Device Help Centers` (Find order, Meta Quest and Quest Pro, AI Glasses, Meta Portal), `Meta Help Center` (Accounts Center, Meta Pay, Policies, Connected Experiences) and `App Help Centers` (Meta Horizon, Facebook, Messenger, Instagram, WhatsApp, Workplace). Column headings are small, bold and blue-gray; the links are larger, regular weight and near-black.
- Beneath the panel, a full-bleed video hero: a close-up of a person in a denim jacket with large gold earrings, face cropped out, in saturated green and blue tones. Part of a white headline (`...of human connection`) is visible, then a blue pill `Our mission`, and a circular outlined pause button at the right edge.
- The rest of the captured page is mostly white with isolated blue pills (`Our technologies`, `AI at Meta`) in the middle of large empty areas. The surrounding content was not rendered in the capture, so I cannot describe what sits around those buttons from the image. The text content was measured from the DOM instead (headline, body, card titles).

Character: confident and plain. One brand blue, white space, soft rounded shapes, big photography.

**Key characteristics**
- `{colors.primary}` (#0064e0) is the only saturated UI color; every measured call-to-action is a blue pill.
- Pills use a 100px radius (`{rounded.md}`) and are 44px tall with `11px 20px` padding.
- Display type: Optimistic VF at 48px, weight 500, line-height 57.6px, tracking 0.576px, white over the hero video.
- Cool blue-gray text system: `{colors.ink}` (#1c2b33) for body, `{colors.ink-muted}` (#5d6c7b) for the most-read secondary text.
- Cards use `{colors.surface-card}` (#f8f9fb) with 24px corners and no shadow.
- Nav and footer text are set in a Helvetica/Arial stack at 12px; the content uses Optimistic VF.

## Colors

All colors were measured on the live page.

### Actions
- **Primary** `{colors.primary}` (#0064e0): fill of all six measured CTA candidates (`Our mission`, `Get to know our leadership`, `Explore our technologies`, `Our technologies`, `Our actions`, `Learn more`).
- **Primary hover** `{colors.primary-hover}` (#0050b3): recorded after hovering `Our mission` and `Our technologies`; only the fill changes, text stays white and no shadow appears.
- **On primary** `{colors.on-primary}` (#ffffff).

### Ink
- **Ink** `{colors.ink}` (#1c2b33): the body paragraph color and the `Go to Help Center` link color. The generator had assigned #5d6c7b as ink because it is read slightly more often (952 characters against 883); I reassigned the roles because the measured body paragraph and link text use #1c2b33, and kept #5d6c7b under `ink-muted`.
- **Ink muted** `{colors.ink-muted}` (#5d6c7b): most-read text color overall.
- **Ink deep** `{colors.ink-deep}` (#0a1317): measured on 159 characters.
- **Ink slate** `{colors.ink-slate}` (#465a69): 126 characters.
- **Ink faint** `{colors.ink-faint}` (#768591): 15 characters.
- **Nav text** `{colors.nav-text}` (#1c1e21): header and footer text in the Helvetica-stack areas.
- **Nav link text** `{colors.nav-link-text}` (#385898): the measured color of a header link wrapper.

### Surfaces and lines
- **Canvas** `{colors.canvas}` (#ffffff): body background and the dominant color of the capture.
- **Surface card** `{colors.surface-card}` (#f8f9fb): the measured card background.
- **Surface dark** `{colors.surface-dark}` (#000000): the largest measured background area on the page by DOM size. In the capture the hero is a photographic video rather than flat black, so treat this as a dark media backdrop, not a UI panel color.
- **Hairline** `{colors.hairline}` (#cbd2d9): the border of the outlined `See more at Newsroom` button.
- **Card border** `{colors.card-border}` (#f8f9fb33): a faint border on the first card.
- The header and dropdown use a white at about 80% opacity (`#ffffffcc` in the measured backgrounds), which is why they look frosted over the video.

### Not tokenized
The page's root custom properties contain Facebook-product values such as `--fds-blue-60` (#1877F2) and a gray #65676B. They sit in a shared stylesheet; I did not see them applied on this page, so they are left out.

## Typography

One loaded face: `Optimistic VF`, a variable font with a weight axis from 200 to 800 (per the loaded-font record). An `Optimistic Text Bold` family name also appears on 59 characters. Helvetica/Arial is used for the navigation and footer.

| Role | Family | Size / line | Weight | Tracking |
|---|---|---|---|---|
| Display (h1/h2) | Optimistic VF | 48px / 57.6px | 500 | 0.576px |
| Display, mobile (390px) | Optimistic VF | 36px / 43.2px | 500 | 0.36px |
| Body | Optimistic VF | 18px / 27px | 400 | normal |
| Button / link | Optimistic VF | 16px / 22.4px | 700 | 0.08px |
| Nav and footer | Helvetica, Arial | 12px / 16.08px | 400 | normal |

Other measured facts:
- 14px is the most-used size (1143 characters) with -0.14px tracking; its weight and role were not isolated, so there is no token for it.
- 48px text appears with both +0.576px and -0.48px tracking, and 36px with both +0.36px and -0.36px; the positive pair belongs to the h1/h2 role, the negative pair to other 48px and 36px runs I did not identify.
- Weights in use: 400 (1557 characters), 500 (584) and 700 (362).

### Principles
- Display text is medium weight (500), not bold; bold is kept for buttons and links.
- Tracking is slightly open on headlines and on 16-18px text, and slightly tight on 14px text.
- Headlines are white because they sit on the hero video.

### Note on font substitutes
Optimistic VF is loaded from the site; I found no license or download information in the sources I opened (the Meta brand page I read names no typefaces). A close open substitute cannot be asserted without that, so choose a neutral geometric-humanist sans, such as Inter or Helvetica Neue, and keep the weights 400 / 500 / 700.

## Layout

- Page width 1280px at desktop; the header spans the full width and is 64px tall.
- The hero is full-bleed video; the headline column measured 600px wide at 115px tall.
- Body copy blocks measured 445px wide, which matches the 445px card width, suggesting a narrow text column; I did not verify the grid beyond that.
- Large vertical rhythm: the most frequent paddings were 4px (18 occurrences), 72px (17), 16px (14), 48px (13), 11px (10), 20px (10), 12px, 32px and 160px (5).
- Gaps are small: 4px (8 times), 12px, 24px, 16px, 8px.
- The footer is tall (1093px) and holds many link columns in 12px text (`Meta Store`, `Meta Glasses`, `Ray-Ban Meta glasses`, `Oakley Meta glasses` among them).
- Spacing tokens `{spacing.s1}`..`{spacing.s10}` list 2, 4, 8, 11, 12, 16, 20, 24, 32 and 36px.

### Component state summary

| Component | Rest | Hover (measured) | Shadow |
|---|---|---|---|
| Blue pill | `{colors.primary}` fill, white text, 44px | `{colors.primary-hover}` fill, same text | none |
| Outlined pill | white fill, 1px `{colors.hairline}` border, 46px | not recorded | none |
| Support pill | gray fill when its menu is open | not recorded | none |
| Card | `{colors.surface-card}` | not recorded | none |

Border color on the blue pills is recorded as white (rgb 255 255 255) in both states, so the pill has no visible outline against white.

## Elevation & Depth

No box shadows were measured on the page. Depth comes from:
1. Photography and video behind translucent white panels (the frosted header and `Support` dropdown).
2. Tonal cards: `{colors.surface-card}` on white, with a 24px radius.
3. A circular outlined pause control floating over the video.

Hover is communicated by a fill change (`{colors.primary}` to `{colors.primary-hover}`), never by a shadow.

## Shapes

| Token | Value | Where |
|---|---|---|
| `{rounded.xs}` | 24px | cards (15 elements) |
| `{rounded.sm}` | 32px | 3 elements |
| `{rounded.md}` | 100px | the CTA pills, outlined button (10 elements) |
| `{rounded.pill}` | 9999px | fully round shape |

50% radii (4 elements) are the circular icon controls such as the pause button. The shape language is soft and rounded: pills for actions, generous 24px corners for cards.

## Components

### Primary button (`button-primary`)
`{colors.primary}` fill, `{colors.canvas}` text, Optimistic VF 16px/700, `{rounded.md}`, padding `11px 20px`, height 44px. Widths hug the label (133px for `Our mission`, 250px for `Get to know our leadership`). Hover: `button-primary-hover` fill `{colors.primary-hover}`.

### Secondary button (`button-secondary`)
Measured identical to the primary in style (blue pill, 44px); the extractor's second candidate was `Get to know our leadership`. Treat all blue pills as one button family.

### Outlined button
White fill, `{colors.ink}` text, 1px `{colors.hairline}` border, 100px radius, 46px tall; label `See more at Newsroom`.

### Text link (`link`)
`Go to Help Center`: `{colors.ink}`, Optimistic VF 16px/700, padding `3px 15px 3px 36px` (the wide left padding leaves room for a leading icon, which I did not see in the capture), 28px tall.

### Navigation (`nav`, `nav-link`)
64px bar, Helvetica 12px, `{colors.nav-text}` text; `Support` appears as a gray pill when its menu is open. The shopping bag and account controls are outline icons.

### Mega-menu
Translucent white panel with three columns, small bold blue-gray headings (`{colors.ink-muted}`-like) and 16-18px link items.

### Cards (`card`)
`{colors.surface-card}` fill, `{rounded.xs}` radius, `16px 24px` padding, optional `{colors.card-border}` border. Each has a title (`Safety and expression`, `Data and privacy`) and a one-sentence description (`Protecting your voice and helping you ...`, `Giving you control over your privacy and ...`). The card text was measured at 12px Helvetica-stack in the DOM, which may be the wrapper style rather than the visible title; not relied on.

### Media controls
Circular outlined pause button over the hero video.

### Footer
`{colors.nav-text}` 12px text in a long multi-column list.

## Content Structure and Voice

Read from the page text (fetched from `https://www.meta.com/about/`), in order:

1. `We're building the future of human connection` (hero h1, with `Our mission` button)
2. `And the technologies that make it possible` (`Our technologies`, `AI at Meta`)
3. `Our innovations give people new ways to connect` (product features; sample copy: `Capture, share and stay in the moment, completely hands-free.` and `Dive into the wonder of mixed reality with the new Meta Quest 3S.`)
4. `And we're committed to helping keep everyone safe and making a positive impact` (cards `Safety and expression`, `Data and privacy`, `Responsible innovation`)
5. `Catch up on the latest news` (`See more at Newsroom`)
6. `Shop the latest devices and expand your world` (`Ray-Ban Meta AI glasses`, `Meta Quest 3S`)
7. `Connect in new ways with our products`
8. `Stay informed about our actions` (`Our actions`)
9. `Meet our leadership` (`Get to know our leadership`)

Voice: first-person plural (`We're building`, `our products`), sentence case, headlines as continuing sentences (item 2 begins with `And`), and benefit-led product lines. Buttons are short noun phrases (`Our mission`, `Our actions`, `Learn more`) rather than verbs. The structure alternates a large statement, one supporting sentence or card set, and one blue pill. That repeated rhythm is consistent with the capture's isolated pills, but I did not verify why the surrounding content is blank.

## Design System Architecture

Sources opened:

- [Meta brand resources: company brand](https://www.meta.com/brand/resources/meta/company-brand/): the logo guidance. It says the Meta logo exists in four color variations (primary and mono), has a minimum size of 12px/5mm measured by the symbol height, clear space equal to double the symbol height, requires approval for all usage, and should not represent Facebook. It names no typefaces and gives no hex values.
- [Meta Horizon OS design](https://developers.meta.com/horizon/design/) and its [styles and layouts](https://developers.meta.com/horizon/design/styles_layouts/) page: guidance for Meta Quest apps (foundations, interactions, components, a Figma and Unity UI set). Its layout page gives panel viewport sizes (default 1024dp by 640dp) and links to separate color and typography pages; it does not give the marketing site's values.
- [facebook/astryx](https://github.com/facebook/astryx): an MIT-licensed open-source design system in beta, React 19+ and StyleX, 150+ components and seven themes, which its README says grew inside Meta over eight years. [facebook/stylex](https://github.com/facebook/stylex) is the styling library. I have not confirmed that either one is used on the corporate about page.

No public design system or token file for the about.meta.com / meta.com marketing site was found. The de-facto system from the page: a single blue pill, Optimistic VF type, a blue-gray ink scale, and tonal 24px cards. Obfuscated utility custom properties (names like `--x3afi3p`) and shared `--fds-*` variables in the stylesheet show a compiled-CSS build rather than a hand-authored token file.

## Do's and Don'ts

### Do
- Use one blue (`{colors.primary}`) for primary actions and make them full pills at 44px height.
- Set headlines at weight 500 with slightly open tracking and let photography sit behind them in white.
- Use `{colors.surface-card}` with 24px corners for grouped topics.
- Keep text in the blue-gray ink family rather than pure black.
- Use frosted white panels over imagery for menus.

### Don't
- Do not add shadows; none were measured.
- Do not use the Meta logo to represent Facebook, per the brand page.
- Do not fill cards with the blue; it is reserved for actions.
- Do not use bold for display headlines; the measured weight is 500.
- Do not shrink buttons below the measured 44px height.

## Responsive Behavior

Measured at 390px: the headline drops from 48px/57.6px (tracking 0.576px) to 36px/43.2px (tracking 0.36px), both weight 500 and set as an h2 in the mobile DOM. Other mobile layout behavior (menu collapse, card stacking) was not recorded, so none is claimed.

### Touch targets
Buttons are 44px tall (46px for the outlined variant).

## Iteration Guide

1. Start with a white page and a full-bleed media hero; put the display headline in white on top.
2. Add one blue pill (`{colors.primary}`, 100px radius, 44px) for the hero action.
3. Follow with white sections; each ends with a blue pill linking onward.
4. Use `{colors.surface-card}` cards with 24px radius for topics.
5. Set body in Optimistic VF (or a neutral sans) at 18px/27px in `{colors.ink}`.
6. Keep nav and footer small (12px) and quiet.
7. Use fill changes (`{colors.primary-hover}`) for hover.
