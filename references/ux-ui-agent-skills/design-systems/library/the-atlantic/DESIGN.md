---
version: alpha
name: The Atlantic
category: "News & Publishing"
description: "The Atlantic's site is black #000000 type on a white #ffffff page: AGaramondPro 400 headlines (38px/44px lead, 46px/52px article h1) and 22px/33px article body, uppercase Atlantic Serif section titles (32px, 1px tracking), a Logic Monospace metadata layer for bylines and kickers, Graphik 14px nav, one red #e7131a Subscribe button with 4px radius, 12px-radius colored game cards and a black footer."

colors:
  primary: "#e7131a"
  primary-border: "#d0021b"
  primary-hover-text: "#a80d13"
  on-primary: "#ffffff"
  canvas: "#ffffff"
  ink: "#000000"
  ink-muted: "#5e6a74"
  ink-faint: "#979797"
  surface-gray: "#f7f7f7"
  footer: "#000000"
  on-footer: "#ffffff"
  border-input: "#c0ccda"
  nav-border-light: "#c1c1c1"
  nav-border-dark: "#9b9b9b"
  rule: "#00000026"
  game-orange: "#ff5e19"
  game-yellow: "#ffc200"
  game-pink: "#ed9bc7"
  game-lavender: "#b0a3ff"
  promo-blue: "#0076bf"

typography:
  headline-article:
    fontFamily: "AGaramondPro, \"Adobe Garamond Pro\", garamond, Times, serif"
    fontSize: 46px
    fontWeight: 400
    lineHeight: 52px
  headline-article-mobile:
    fontFamily: "AGaramondPro, \"Adobe Garamond Pro\", garamond, Times, serif"
    fontSize: 38px
    fontWeight: 400
    lineHeight: 44px
  headline-lead:
    fontFamily: "AGaramondPro, \"Adobe Garamond Pro\", garamond, Times, serif"
    fontSize: 38px
    fontWeight: 400
    lineHeight: 44px
  headline-promo:
    fontFamily: "AGaramondPro, \"Adobe Garamond Pro\", garamond, Times, serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 32px
  headline-rail:
    fontFamily: "AGaramondPro, \"Adobe Garamond Pro\", garamond, Times, serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 26px
  headline-game:
    fontFamily: "AGaramondPro, \"Adobe Garamond Pro\", garamond, Times, serif"
    fontSize: 24px
    fontWeight: 600
    lineHeight: 28px
  dek-lead:
    fontFamily: "AGaramondPro, \"Adobe Garamond Pro\", garamond, Times, serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 28px
  body-summary:
    fontFamily: "AGaramondPro, \"Adobe Garamond Pro\", garamond, Times, serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 26px
  body-article:
    fontFamily: "AGaramondPro, \"Adobe Garamond Pro\", garamond, Times, serif"
    fontSize: 22px
    fontWeight: 400
    lineHeight: 33px
  section-title:
    fontFamily: "\"Atlantic Serif\", Atlantic, Bodoni, Times, serif"
    fontSize: 32px
    fontWeight: 400
    lineHeight: 32px
    letterSpacing: 1px
  kicker:
    fontFamily: "\"Logic Monospace\", monospace"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 16.1px
    letterSpacing: 1px
  kicker-article:
    fontFamily: "\"Logic Monospace\", monospace"
    fontSize: 13px
    fontWeight: 300
    lineHeight: 14px
    letterSpacing: 0.78px
  byline:
    fontFamily: "\"Logic Monospace\", monospace"
    fontSize: 13px
    fontWeight: 500
    lineHeight: 13px
    letterSpacing: 0.5px
  credit:
    fontFamily: "\"Logic Monospace\", monospace"
    fontSize: 11px
    fontWeight: 300
    lineHeight: 11px
  button-mono:
    fontFamily: "\"Logic Monospace\", monospace"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 14px
  button-mono-sm:
    fontFamily: "\"Logic Monospace\", monospace"
    fontSize: 12px
    fontWeight: 500
    lineHeight: 14px
  link-more:
    fontFamily: "\"Logic Monospace\", monospace"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 18px
  footer-link:
    fontFamily: "\"Logic Monospace\", monospace"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 17.5px
    letterSpacing: 0.5px
  footer-base:
    fontFamily: "\"Logic Monospace\", monospace"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 20px
  nav:
    fontFamily: "Graphik, -apple-system, blinkmacsystemfont, roboto, \"helvetica neue\", \"segoe ui\", arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 16.1px
    letterSpacing: 0.25px

rounded:
  none: 0px
  sm: 2px
  md: 4px
  lg: 12px
  pill: 9999px

spacing:
  xxs: 4px
  xs: 8px
  sm: 16px
  md: 20px
  lg: 24px
  xl: 32px
  xxl: 40px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.nav}"
    rounded: "{rounded.md}"
    padding: 10px 18px 11px
    height: 39px
    border: "1px solid #d0021b"
  button-black:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-mono}"
    rounded: "{rounded.md}"
    padding: 8px 16px 10px
    height: 34px
    border: "1px solid #000000"
  button-inverse:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button-mono}"
    rounded: "{rounded.md}"
    padding: 8px 16px 10px
    height: 38px
    border: "1px solid #ffffff"
  button-outlined:
    backgroundColor: transparent
    textColor: "{colors.ink}"
    typography: "{typography.button-mono-sm}"
    rounded: "{rounded.md}"
    padding: 0px 8px
    height: 40px
    border: "1px solid #000000"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.md}"
    padding: 10px 16px
    height: 38px
    border: "1px solid #c0ccda"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  kicker-link:
    textColor: "{colors.primary}"
    typography: "{typography.kicker-article}"
    textTransform: uppercase
  kicker-link-hover:
    textColor: "{colors.primary-hover-text}"
  byline-link:
    textColor: "{colors.ink}"
    typography: "{typography.byline}"
    textTransform: uppercase
  byline-link-hover:
    textDecoration: underline
  link:
    textColor: "{colors.ink}"
    typography: "{typography.headline-promo}"
  card-game:
    backgroundColor: "{colors.game-orange}"
    textColor: "{colors.ink}"
    typography: "{typography.headline-game}"
    rounded: "{rounded.lg}"
    padding: 24px 16px 16px
    boxShadow: rgb(0, 0, 0) 0px 0px 0px 1px inset
  footer:
    backgroundColor: "{colors.footer}"
    textColor: "{colors.on-footer}"
    typography: "{typography.footer-base}"
    padding: 32px 16px 48px
---

## Overview

The Atlantic reads like its print magazine. The capture shows a thin black bar across the very top, then a white `{colors.canvas}` masthead: a hamburger, search icon and three Graphik text links (Popular, Latest, Newsletters) on the left, **Sign In** and a single red **Subscribe** button on the right, and in the centre the brand's emblem — a tall red serif capital "A" above an italic "The Atlantic" wordmark, breaking through a thin grey horizontal rule.

Below, the homepage is a strict four-column editorial grid separated by hairline vertical and horizontal rules. The lead story sits centre with a large framed photograph, a red uppercase monospace kicker ("EXCLUSIVE"), a centred AGaramondPro headline (`{typography.headline-lead}`, 38px/44px), a centred 20px dek and an uppercase monospace byline. Side columns stack image-plus-headline promos; the right rail lists text headlines with small square thumbnails.

Three voices of type carry the identity:
1. **AGaramondPro** — every headline, dek and paragraph (≈4,900 characters on the homepage, ≈11,400 on an article).
2. **Logic Monospace** — the metadata layer: photo credits, bylines, kickers, buttons, the footer.
3. **Atlantic Serif** — uppercase display titles for sections ("THE ATLANTIC GAMES").

Graphik appears only in the masthead nav and the red Subscribe button.

Color is almost absent: black ink on white, red `{colors.primary}` (#e7131a) for the subscribe button, kickers and the "A", and saturated flat fills only on the Games cards (#ff5e19, #ffc200, #ed9bc7, #b0a3ff).

**Key Characteristics:**
- White canvas, pure black `{colors.ink}` text — no greys for body copy.
- One red action: Subscribe (#e7131a fill, #d0021b 1px border, 4px radius).
- Serif headlines at weight 400 — never bold — sentence case, often centred on lead stories.
- Monospace uppercase bylines with positive tracking (0.5px at 13px).
- Photo credits in 11px Logic Monospace weight 300 directly under each image ("Anna Moneymaker / Getty").
- Hairline rules divide columns and rows instead of cards or shadows.
- Games cards are the only rounded, colored containers (12px radius, 1px inset black outline).

## Colors

> Source: measured on https://www.theatlantic.com/ (served at /world/) and an article page, desktop 1280px.

### Brand & Action
- **Atlantic Red** (`{colors.primary}` — #e7131a): Subscribe button fill, uppercase kickers ("EXCLUSIVE", "TECHNOLOGY"), the "A" emblem.
- **Red Border** (`{colors.primary-border}` — #d0021b): 1px border on the Subscribe button.
- **Red Hover** (`{colors.primary-hover-text}` — #a80d13): Measured hover color of a red kicker link on the article page.
- **On Primary** (`{colors.on-primary}` — #ffffff): Text on red and black buttons.

### Surface
- **Canvas** (`{colors.canvas}` — #ffffff): Page and nav background.
- **Surface Gray** (`{colors.surface-gray}` — #f7f7f7): Root variables `--article-sharekit-background`, `--nav-expanded-background`, `--article-injector-ad-background`; the largest background area on the article page.
- **Footer** (`{colors.footer}` — #000000): Full-width black footer; also the top strip and the black monospace buttons.
- **Promo Blue** (`{colors.promo-blue}` — #0076bf): A measured blue promotional block background (second-largest colored area on the homepage).

### Games palette
- **Orange** (`{colors.game-orange}` — #ff5e19) — Bracket City card
- **Yellow** (`{colors.game-yellow}` — #ffc200) — Crossword card
- **Pink** (`{colors.game-pink}` — #ed9bc7) — Rabbithole card
- **Lavender** (`{colors.game-lavender}` — #b0a3ff) — fourth game card

### Text
- **Ink** (`{colors.ink}` — #000000): Headlines, body, bylines, nav. The most-read color by far (≈6,800 characters).
- **Ink Muted** (`{colors.ink-muted}` — #5e6a74): Third most-read text color on the homepage (≈300 characters); the specific element was not isolated.
- **Ink Faint** (`{colors.ink-faint}` — #979797): Rare low-emphasis text.
- **On Footer** (`{colors.on-footer}` — #ffffff): Footer text.

### Lines
- **Input Border** (`{colors.border-input}` — #c0ccda): Newsletter input border; also `--article-image-loading-placeholder-color`.
- **Nav Border Light / Dark** (#c1c1c1 / #9b9b9b): Root variables `--nav-border-color-light` / `--nav-border-color-dark`.
- **Rule** (`{colors.rule}` — #00000026): 15% black border measured on the article page.

## Typography

### Font Family
Four families are served as web fonts:
- **AGaramondPro** (400, 400 italic, 600) — stack `AGaramondPro, "Adobe Garamond Pro", garamond, Times, serif`. Adobe Garamond Pro is an Adobe typeface; the site serves it under the name `AGaramondPro`.
- **Logic Monospace** (300, 400; 500 computed) — stack `"Logic Monospace", monospace`.
- **Atlantic Serif** (300, 400) — stack `"Atlantic Serif", Atlantic, Bodoni, Times, serif`.
- **Graphik** (400, 600) — stack `Graphik, -apple-system, blinkmacsystemfont, roboto, "helvetica neue", "segoe ui", arial, sans-serif`.

The Atlantic's own 2019 launch interview ("Introducing a New Look for The Atlantic") describes **Atlantic Condensed** as "the typeface that we commissioned based on the type forms that the founders chose for the first issue… a 'Scotch' face". Type foundry MCKL's essay "Designing Atlantic" says the Atlantic family was designed by Jeremy Mickel with Oliver Munday and creative director Peter Mendelsund, drawn from 19th-century American Scotch Romans, and now spans three widths (XNarrow, Narrow, Condensed) with seven weights in roman and italic. The stylesheet also declares `Atlantic Condensed`, `Druk`, `Druk Wide`, `Goldwyn` and `Gridular` @font-faces, which were not seen rendering on the measured pages.

### Hierarchy

| Token | Family | Size / Line | Weight | Tracking | Use |
|---|---|---|---|---|---|
| `{typography.headline-article}` | AGaramondPro | 46px / 52px | 400 | normal | Article h1 (desktop) |
| `{typography.headline-article-mobile}` | AGaramondPro | 38px / 44px | 400 | normal | Article h1 at 390px |
| `{typography.headline-lead}` | AGaramondPro | 38px / 44px | 400 | normal | Homepage lead story |
| `{typography.section-title}` | Atlantic Serif | 32px / 32px | 400 | 1px | "THE ATLANTIC GAMES" (uppercase) |
| `{typography.headline-promo}` | AGaramondPro | 24px / 32px | 400 | normal | Grid promo headlines |
| `{typography.headline-game}` | AGaramondPro | 24px / 28px | 600 | normal | Game card titles |
| `{typography.body-article}` | AGaramondPro | 22px / 33px | 400 | normal | Article paragraphs |
| `{typography.dek-lead}` | AGaramondPro | 20px / 28px | 400 | normal | Lead-story dek |
| `{typography.body-summary}` | AGaramondPro | 18px / 26px | 400 | normal | Promo summaries |
| `{typography.headline-rail}` | AGaramondPro | 18px / 26px | 400 | normal | Right-rail headlines |
| `{typography.kicker}` | Logic Monospace | 14px / 16.1px | 400 | 1px | "EXCLUSIVE" (uppercase, red) |
| `{typography.kicker-article}` | Logic Monospace | 13px / 14px | 300 | 0.78px | Article section kicker (uppercase, red) |
| `{typography.byline}` | Logic Monospace | 13px / 13px | 500 | 0.5px | Bylines (uppercase) |
| `{typography.credit}` | Logic Monospace | 11px / 11px | 300 | normal | Photo credits |
| `{typography.button-mono}` | Logic Monospace | 14px / 14px | 400 | normal | Black / inverse buttons |
| `{typography.button-mono-sm}` | Logic Monospace | 12px / 14px | 500 | normal | Outlined "Play Today's Game" |
| `{typography.link-more}` | Logic Monospace | 14px / 18px | 500 | normal | "View All Games" (capitalize) |
| `{typography.footer-base}` | Logic Monospace | 16px / 20px | 400 | normal | Footer base text |
| `{typography.footer-link}` | Logic Monospace | 14px / 17.5px | 400 | 0.5px | Footer links |
| `{typography.nav}` | Graphik | 14px / 16.1px | 400 | 0.25px | Masthead links, Subscribe |

### Principles
- **Regular-weight serif headlines.** Every editorial headline is AGaramondPro 400; only Games card titles use 600.
- **Generous leading.** Body runs at 1.5 (22/33) and summaries at ~1.44 (18/26).
- **Monospace = metadata.** Anything that isn't prose or a headline — credits, bylines, kickers, buttons, footer — is Logic Monospace, usually uppercase with 0.5–1px tracking.
- **Italic for titles of works** inside headlines ("*Fauda*'s October 7 Episodes", "*Carrie*, With Kid Gloves") — AGaramondPro 400 italic is served.

### Note on Font Substitutes
AGaramondPro is Adobe Garamond Pro (commercial, Adobe). Atlantic Serif / Atlantic Condensed are commissioned faces now sold by MCKL; Logic Monospace and Graphik are commercial. The site's own fallbacks are `garamond, Times, serif` for the serif, `Bodoni, Times, serif` for Atlantic Serif, `monospace` for Logic, and the system UI stack for Graphik. No open-source substitute is named by The Atlantic; none is prescribed here.

## Layout

### Spacing System
- **Measured gaps:** 24px (most common), 20px, 32px, 8px, 4px, 40px. **Paddings:** 16px, 8px, 6px, 4px, 24px, 12px.
- **Tokens:** `{spacing.xxs}` 4px · `{spacing.xs}` 8px · `{spacing.sm}` 16px · `{spacing.md}` 20px · `{spacing.lg}` 24px · `{spacing.xl}` 32px · `{spacing.xxl}` 40px.

### Grid & Container
- Homepage: four columns on desktop (column text widths of 288px for summaries; 608px for the two-column lead), separated by 1px vertical rules, rows separated by full-width horizontal rules.
- Lead row: one narrow left column, a double-width centre lead, and a right rail of headlines with small square thumbnails.
- Article: a single 665px reading column (h1 and body both 665px wide).
- Footer: `32px 16px 48px` padding.

### Whitespace Philosophy
The page is dense but calm: hairline rules and 20–32px gaps create structure, images are framed within their columns rather than bleeding off the page — matching the creative director's stated intent that images be "contained within its own cordoned-off space" and "weren't full bleed".

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | Flat | Everything editorial |
| Outline | `rgb(0, 0, 0) 0px 0px 0px 1px inset` | Game cards — a drawn 1px black frame, not a shadow |

No drop shadows render on the measured pages. The stylesheet corpus contains shadows (e.g. `0 0 4px 1px rgba(0,0,0,.08)`) used by components not seen on these pages; they are not declared.

## Shapes

### Border Radius Scale

| Token | Value | Use |
|---|---|---|
| `{rounded.none}` | 0px | Images, rules, nav, editorial blocks |
| `{rounded.sm}` | 2px | Small measured element (1 occurrence) |
| `{rounded.md}` | 4px | All buttons and the newsletter input |
| `{rounded.lg}` | 12px | Games cards |
| `{rounded.pill}` | 9999px | `999px` radius present in the stylesheet corpus (pill elements) |

### Signature shape
The red serif "A" emblem breaking the masthead rule is the brand's single strongest graphic device. Game cards carry centred black spot-illustrations on flat color.

## Components

### Buttons

**`button-primary`** — Subscribe (desktop masthead).
- Background `{colors.primary}` #e7131a, text #ffffff, Graphik 14px/16.1px 400 with 0.25px tracking, padding 10px 18px 11px, height 39px, 1px solid #d0021b border, radius 4px.

**`button-black`** — newsletter/audio CTAs and the mobile Subscribe.
- Background #000000, text #ffffff, Logic Monospace 14px/14px 400, padding 8px 16px 10px, height 34px, 1px solid #000000, radius 4px. On mobile (390px) the masthead Subscribe uses this style instead of red.

**`button-inverse`** — "Search Now" on dark modules.
- Background #ffffff, text #000000, 1px solid #ffffff, Logic Monospace 14px/17.5px, padding 8px 16px 10px, height 38px, radius 4px.

**`button-outlined`** — "Play Today's Game".
- Transparent, 1px solid #000000, Logic Monospace 12px/14px 500, padding 0px 8px, height 40px, radius 4px.

### Inputs

**`text-input`** — newsletter email field.
- Background #ffffff, text #000000, Graphik 14px/16.1px, padding 10px 16px, height 38px, 1px solid #c0ccda, radius 4px.

### Links
- **`link`** — headline links: black, no underline.
- **`kicker-link`** — red uppercase Logic Monospace; **hover** (`kicker-link-hover`) darkens to #a80d13.
- **`byline-link`** — black uppercase Logic Monospace; **hover** adds underline.
- "SAVE" button on articles turns from black to #e7131a on hover.

### Navigation
**`nav`** — white masthead (226px tall including the emblem), Graphik 14px links with 0.25px tracking, black text. A black strip runs above it.

### Cards
**`card-game`** — Games row: 288px wide, 338px tall, radius 12px, 1px inset black outline, padding 24px 16px 16px, fill from the games palette; centred illustration, AGaramondPro 24px/28px 600 title, short serif description.

### Promos
Image (framed, square corners) → 11px Logic credit → 24px/32px serif headline → 18px/26px summary → uppercase 13px Logic byline.

### Footer
**`footer`** — black, white Logic Monospace (16px/20px base, 14px/17.5px 0.5px links), padding 32px 16px 48px; "Popular Links" columns (About, Our History, Careers, Contact, Help Center…).

## Design System Architecture

The Atlantic publishes **no public design system, token package or brand portal**. Searches for an official design system, brand guidelines/press kit and a GitHub token/component repository returned only third-party reconstructions (not used). What is documented officially is the 2019 identity, described by the magazine itself in ["Introducing a New Look for The Atlantic"](https://www.theatlantic.com/news/archive/2019/11/introducing-new-look-atlantic/601762/) and by its type foundry in [MCKL — Designing Atlantic](https://www.mckltype.com/essays/designing-atlantic).

### Token architecture (de-facto, from the live site)
- Only nine CSS custom properties exist on `:root`, all semantic and component-scoped, e.g. `--article-sharekit-background: #f7f7f7`, `--nav-border-color-light: #c1c1c1`, `--nav-border-color-dark: #9b9b9b`, `--nav-expanded-background-accent: #fff`, `--paywall-background: #fff`, `--article-image-loading-placeholder-color: #c0ccda`. There is no primitive color scale exposed.
- Type is set per component with full font stacks rather than variables.

### Theming
No dark mode or theme switch was observed. Inversion happens per module (black footer, black buttons, colored game cards).

### Type & spacing systems
- Three type registers: AGaramondPro for reading, Logic Monospace for metadata, Atlantic Serif / Condensed for display — consistent with the 2019 identity's commissioned Scotch-style display face ([The Atlantic, 2019](https://www.theatlantic.com/news/archive/2019/11/introducing-new-look-atlantic/601762/)).
- Spacing is not tokenised publicly; measured values cluster at 4/8/16/20/24/32/40px.
- Creative director Peter Mendelsund on layout: "good grids, making sure that the page itself has a rigorous, almost Euclidean logic" and images "not full bleed" ([source](https://www.theatlantic.com/news/archive/2019/11/introducing-new-look-atlantic/601762/)).

### Component model
No published inventory. Observable components: masthead with emblem, Subscribe/black/inverse/outlined buttons, newsletter input, promo units, right-rail list with thumbnails, section header (Atlantic Serif + "View All" link), games cards, footer.

### Accessibility
No published accessibility standard was found. Measured: a "SKIP TO CONTENT" link (Graphik 12px 700 uppercase, white on black) exists; body text is #000000 on #ffffff.

### Delivery
Not published. Fonts are self-hosted @font-faces (AGaramondPro, Graphik, Atlantic Serif, Logic Monospace, plus Atlantic Condensed, Goldwyn, Gridular, Druk, Druk Wide in the corpus).

## Do's and Don'ts

### Do
- Set all headlines and prose in AGaramondPro 400 on white with pure black ink.
- Keep red #e7131a for the Subscribe action and kickers only.
- Put every byline, credit and kicker in Logic Monospace, uppercase where measured, with 0.5–1px tracking.
- Divide the grid with hairline rules; frame images inside columns.
- Use Atlantic Serif uppercase with 1px tracking for section titles.
- Use 4px radius for buttons and inputs, 12px only for game cards.

### Don't
- Don't bold headlines (except game titles at 600).
- Don't use grey body text — the measured body is #000000.
- Don't add drop shadows or rounded editorial cards.
- Don't introduce a second accent color outside the games palette.
- Don't set nav or metadata in the serif.

## Responsive Behavior

### Breakpoints
Breakpoint values were not measured; behaviour below compares 1280px and 390px.

| Viewport | Changes measured |
|---|---|
| 1280px | Four-column grid, red Graphik Subscribe in masthead, article h1 46px/52px |
| 390px | Masthead Subscribe becomes the black Logic Monospace button (358px wide), article h1 38px/44px, body summaries remain 18px |

### Collapsing Strategy
At 390px content is a single 358px column (16px gutters). Font sizes measured on mobile: 18px, 13px, 24px, 11px, 16px, 12px, 10px, 32px, 14px, 20px — the same scale as desktop minus the 38px lead size.

### Touch Targets
Buttons are 34–40px tall; the outlined game button is 40px.

## Iteration Guide

1. White canvas, #000000 ink, AGaramondPro 400 for anything editorial.
2. Add the monospace metadata layer (credits 11px/300, bylines 13px/500 uppercase).
3. One red Subscribe; everything else black/white.
4. Rules, not cards; framed images.
5. Section titles in Atlantic Serif uppercase 32px with 1px tracking.
6. Buttons: 4px radius, mono label, 1px border matching fill.
7. Italicise titles of works inside headlines with AGaramondPro italic.
8. Credit every photograph directly beneath it in 11px Logic Monospace 300.
9. Keep the red emblem "A" as the only large graphic in the masthead.
10. Re-run `node web/scripts/verify-designs.mjs --slug=the-atlantic`.
