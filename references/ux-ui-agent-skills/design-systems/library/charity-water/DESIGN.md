---
version: alpha
name: "charity: water"
category: "Government & Nonprofit"
description: "charity: water's donation-first site: full-bleed documentary photography, Kazimir Text serif headlines at 46px/52px, Proxima Nova UI with widely tracked uppercase labels, a single Jerry Can yellow (#ffca0a, hover #ffd53b) on 4px-radius buttons with #222520 text, warm cream bands (#f8eed3 fading to #faf7f0) on a white (#ffffff) page, and a white donation card with 48px amount buttons."

colors:
  primary: "#ffca0a"
  primary-hover: "#ffd53b"
  primary-hover-nav: "#ffd438"
  brand-yellow-2016: "#ffc907"
  brand-blue-2016: "#2e9df7"
  canvas: "#ffffff"
  cream: "#f8eed3"
  cream-light: "#faf7f0"
  surface-muted: "#f4f5f0"
  amount-bg: "#e9eae4"
  amount-bg-hover: "#f5f5f2"
  dark: "#222520"
  ink: "#222520"
  ink-ui: "#333232"
  ink-ui-hover: "#676464"
  link-hover: "#383b36"
  text-muted: "#9b9b94"
  footer-text: "#71716c"
  navy: "#003366"
  text-accent: "#5493d3"
  border: "#c1c1ba"
  border-light: "#dfdfd7"
  black: "#000000"
  on-dark: "#ffffff"

typography:
  display:
    fontFamily: "\"Kazimir Text\", serif"
    fontSize: 46px
    fontWeight: 400
    lineHeight: 52px
  display-mobile:
    fontFamily: "\"Kazimir Text\", serif"
    fontSize: 35px
    fontWeight: 400
    lineHeight: 40px
  body:
    fontFamily: "\"Proxima Nova\", ui-sans-serif, system-ui, -apple-system, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 24px
  input:
    fontFamily: "\"Proxima Nova\", ui-sans-serif, system-ui, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22.4px
  button:
    fontFamily: "\"Proxima Nova\", ui-sans-serif, system-ui, sans-serif"
    fontSize: 15px
    fontWeight: 500
    lineHeight: 48px
    letterSpacing: 1.5px
  button-md:
    fontFamily: "\"Proxima Nova\", ui-sans-serif, system-ui, sans-serif"
    fontSize: 15px
    fontWeight: 500
    lineHeight: 20px
    letterSpacing: 1.35px
  button-sm:
    fontFamily: "\"Proxima Nova\", ui-sans-serif, system-ui, sans-serif"
    fontSize: 13px
    fontWeight: 500
    lineHeight: 32px
    letterSpacing: 1.3px
  button-mobile:
    fontFamily: "\"Proxima Nova\", ui-sans-serif, system-ui, sans-serif"
    fontSize: 17px
    fontWeight: 500
    letterSpacing: 2px
  amount:
    fontFamily: "\"Proxima Nova\", ui-sans-serif, system-ui, sans-serif"
    fontSize: 15px
    fontWeight: 400
    lineHeight: 48px
  link-cta:
    fontFamily: "\"Proxima Nova\", sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 20px
    letterSpacing: 1.44px
  nav-label:
    fontFamily: "\"Proxima Nova\", ui-sans-serif, system-ui, sans-serif"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 16px
    letterSpacing: 2px
  eyebrow:
    fontFamily: "\"Proxima Nova\", sans-serif"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 16px
    letterSpacing: 2.03px
  tab:
    fontFamily: "\"Proxima Nova\", ui-sans-serif, system-ui, sans-serif"
    fontSize: 14px
    fontWeight: 500
  legal:
    fontFamily: "\"Proxima Nova\", sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 18.2px
  footer-link:
    fontFamily: "\"Proxima Nova\", sans-serif"
    fontSize: 15px
    fontWeight: 400
    lineHeight: 18px
    letterSpacing: 0.2px
  form-label:
    fontFamily: "\"Proxima Nova\", ui-sans-serif, system-ui, sans-serif"
    fontSize: 12px
    fontWeight: 500

rounded:
  sm: 4px
  md: 8px
  lg: 12px
  pill: 9999px

spacing:
  xxs: 4px
  xs: 8px
  sm: 12px
  md: 16px
  lg: 20px
  xl: 24px
  button-x: 40px
  section: 60px
  section-xl: 104px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    textTransform: uppercase
    rounded: "{rounded.sm}"
    padding: 0px 40px
    height: 48px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-primary-md:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button-md}"
    textTransform: uppercase
    rounded: "{rounded.sm}"
    padding: 16px 24px
    height: 52px
  button-give-nav:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button-sm}"
    textTransform: uppercase
    rounded: "{rounded.sm}"
    padding: 8px
    height: 32px
  button-give-nav-hover:
    backgroundColor: "{colors.primary-hover-nav}"
  button-primary-mobile:
    typography: "{typography.button-mobile}"
    padding: 16px
    height: 56px
  amount-button:
    backgroundColor: "{colors.amount-bg}"
    textColor: "{colors.text-muted}"
    border: "1px solid #dfdfd7"
    typography: "{typography.amount}"
    rounded: "{rounded.sm}"
    height: 48px
  amount-button-hover:
    backgroundColor: "{colors.amount-bg-hover}"
  amount-button-selected:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    border: "1px solid #ffca0a"
  frequency-tab-selected:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink-ui}"
    typography: "{typography.tab}"
    rounded: "{rounded.sm}"
    padding: 5px 0px
    height: 30px
  donation-card:
    backgroundColor: "{colors.canvas}"
    border: "1px solid #dfdfd7"
    rounded: "{rounded.sm}"
    padding: 0px 0px 16px
    width: 390px
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-ui}"
    border: "1px solid #c1c1ba"
    typography: "{typography.input}"
    rounded: "{rounded.sm}"
    padding: 13px 10px
    height: 48px
  info-card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.md}"
    padding: 24px
  note-card:
    backgroundColor: "{colors.cream}"
    textColor: "{colors.ink}"
    border: "1px solid #c1c1ba"
    rounded: "{rounded.md}"
    padding: 16px
  link-primary:
    textColor: "{colors.ink}"
    typography: "{typography.link-cta}"
    textTransform: uppercase
    textDecoration: underline
  link-primary-hover:
    textColor: "{colors.link-hover}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-ui}"
    typography: "{typography.nav-label}"
    height: 81px
  nav-link-hover:
    textColor: "{colors.ink-ui-hover}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.footer-text}"
    typography: "{typography.footer-link}"
    padding: 0px 20px 60px
  footer-link-hover:
    textColor: "{colors.text-muted}"
---

## Overview

charity: water's homepage is a fundraising page that reads like a photo essay. The capture opens with a slim white navigation bar (81px tall) — the yellow Jerry Can icon and the "charity: water" wordmark on the left, three widely tracked uppercase menu labels (TAKE ACTION, ABOUT US, WHY WATER?) in the middle-left, and SIGN IN plus a small yellow GIVE button on the right. Directly below, a full-bleed documentary photograph — a boy laughing as he drinks from a glass of clean water against a teal sky — fills the first screen. The headline "Bring clean and safe water to every person on the planet" sits on the left of the photo in white **Kazimir Text** serif, and beneath it floats a white donation card: MONTHLY / GIVE ONCE toggle, a grid of amount buttons ($10, $20, **$40** highlighted in yellow, $100, Other amount), a one-line impact note and a full-width yellow JOIN TODAY button.

The page then turns warm. Sections sit on a cream band (`{colors.cream}` `#f8eed3`) that fades toward `{colors.cream-light}` `#faf7f0` as you scroll. A small tracked eyebrow ("WHY WATER?") introduces a centred Kazimir Text headline ("Because clean water changes everything"), followed by a large rounded photograph with topic chips (HEALTH, EDUCATION, WOMEN, ECONOMIC GROWTH) across its top and a white info card overlapping the lower right with a yellow-underlined text link ("LEARN ABOUT LIVES CHANGED"). The next section opens with a statistic set as a headline ("696 million people lack basic access to clean and safe drinking water").

Colour is restrained: one yellow, warm off-whites, and a near-black olive ink (`{colors.ink}` `#222520`). The yellow is the Jerry Can — the logo's colour — and the site uses it only for things that move money: GIVE, JOIN TODAY, the selected amount, the selected frequency, and the underline of primary links.

**Key Characteristics:**
- Full-bleed, human, documentary photography of people using clean water.
- Kazimir Text serif (regular, 46px/52px) for every headline; Proxima Nova for all UI.
- Uppercase labels with generous tracking (2px at 14px; 1.5px on 15px buttons).
- One action colour: Jerry Can yellow `#ffca0a` with `#222520` text, hover `#ffd53b`.
- 4px radius on buttons, inputs and the donation card; 8px on info cards.
- Warm cream bands (`#f8eed3`, `#faf7f0`) between white surfaces.
- Lowercase footer links in warm grey `#71716c`.

### Voice & Microcopy
Short, direct, mission-first copy: "Bring clean and safe water to every person on the planet", "Because clean water changes everything". Calls to action are imperative and uppercase (JOIN TODAY, GIVE, BROWSE FUNDRAISERS, LEARN ABOUT LIVES CHANGED). Impact is stated concretely next to the money ("Gives 12 people clean water every year on average").

## Colors

> **Sources:** live homepage computed styles and `:root` `--ds-v1-*` custom properties; brand values from the official [Brand Book (2016)](https://d11sa1anfvm2xk.cloudfront.net/media/downloads/brandbook-2016.pdf) linked from [charitywater.org/about/media](https://www.charitywater.org/about/media).

### Brand & Accent
- **Jerry Can Yellow** (`{colors.primary}` — `#ffca0a`): `--ds-v1-cw-primary` and `--ds-v1-button-primary-bg`. All primary buttons, selected amount/frequency, link underline (`--ds-v1-link-primary-underline`).
- **Yellow Hover** (`{colors.primary-hover}` — `#ffd53b`): `--ds-v1-button-primary-bg-hover`; measured on JOIN TODAY hover. The nav GIVE button measured `#ffd438` on hover (`{colors.primary-hover-nav}`).
- **Brand Book Yellow** (`{colors.brand-yellow-2016}` — `#ffc907`, Pantone 114 U): the 2016 Brand Book's primary yellow. The live site ships `#ffca0a`; use the live value on screen.
- **Brand Book Blue** (`{colors.brand-blue-2016}` — `#2e9df7`, Pantone 2925 U): "Blue represents water" (Brand Book). Not seen on the measured homepage UI.
- **Navy** (`{colors.navy}` — `#003366`): `--ds-v1-nav-button-primary`; measured as a text colour in the navigation markup.
- **Text Accent** (`{colors.text-accent}` — `#5493d3`): `--ds-v1-text-accent` (declared, not seen in the capture).

### Surface
- **Canvas** (`{colors.canvas}` — `#ffffff`): body, nav, donation card, info cards.
- **Cream** (`{colors.cream}` — `#f8eed3`): `--ds-v1-background-light-secondary`; the "Why water?" band and note cards.
- **Cream Light** (`{colors.cream-light}` — `#faf7f0`): `--ds-v1-background-light-primary`.
- **Surface Muted** (`{colors.surface-muted}` — `#f4f5f0`): donation-card header strip area.
- **Amount Grey** (`{colors.amount-bg}` — `#e9eae4`) with hover `{colors.amount-bg-hover}` `#f5f5f2`.
- **Dark** (`{colors.dark}` — `#222520`): `--ds-v1-background-dark`.

### Text
- **Ink** (`{colors.ink}` — `#222520`): `--ds-v1-text-default` / `--ds-v1-global-text-default`; headlines, button labels, body.
- **Ink UI** (`{colors.ink-ui}` — `#333232`): nav labels, form input text; nav hover `{colors.ink-ui-hover}` `#676464`.
- **Link Hover** (`{colors.link-hover}` — `#383b36`): `--ds-v1-link-primary-text-hover`.
- **Muted** (`{colors.text-muted}` — `#9b9b94`): unselected amounts, legal text, footer link hover.
- **Footer Text** (`{colors.footer-text}` — `#71716c`).
- **On Dark** (`{colors.on-dark}` — `#ffffff`): hero headline over photography (`--ds-v1-text-inverted`).

### Lines
- **Border** (`{colors.border}` — `#c1c1ba`): inputs, note cards.
- **Border Light** (`{colors.border-light}` — `#dfdfd7`): donation card, amount buttons, nav dropdowns (`--ds-v1-nav-dropdown-border`).
- **Black** (`{colors.black}` — `#000000`): `--ds-v1-nav-border` (rule under the header).

### Semantic
No error/success colours are documented in the Brand Book or visible on the homepage; none are declared here.

## Typography

### Font Family
- **Proxima Nova** (400 and 500 loaded) is the UI and body face. The Brand Book names it the primary brand font, "in print and on the web", with **Avenir** as the fallback and Georgia "sometimes … for body copy, especially on the web".
- **Kazimir Text** is the headline serif on the live site (`--ds-v1-font-heading: Kazimir Text`). It is the text version of Kazimir by Ilya Ruderman and Yury Ostromentsky, CSTM Fonts ([type.today](https://type.today/en/kazimir)). The 2016 Brand Book does not mention it — the site has moved to a serif headline face since then.
- The wordmark is **Baskerville regular at 140 tracking** (Brand Book) — artwork, not live text.
- `--ds-v1-font-mono: Anonymous Pro` is declared but not seen on the homepage.

### Hierarchy

| Token | Family | Size | Weight | Line Height | Tracking | Use |
|---|---|---|---|---|---|---|
| `{typography.display}` | Kazimir Text | 46px | 400 | 52px | — | h1 and h2 (= `--ds-v1-heading-2xl` 2.3rem at a 20px root) |
| `{typography.display-mobile}` | Kazimir Text | 35px | 400 | 40px | — | h1 at 390px |
| `{typography.body}` | Proxima Nova | 18px | 400 | 24px | — | Body default and card copy |
| `{typography.input}` | Proxima Nova | 16px | 400 | 22.4px | — | Form inputs |
| `{typography.link-cta}` | Proxima Nova | 16px | 500 | 20px | 1.44px | Uppercase text links |
| `{typography.button}` | Proxima Nova | 15px | 500 | 48px | 1.5px | JOIN TODAY |
| `{typography.button-md}` | Proxima Nova | 15px | 500 | 20px | 1.35px | BROWSE FUNDRAISERS, PARTNER WITH US |
| `{typography.amount}` | Proxima Nova | 15px | 400 | 48px | — | Amount buttons (lowercase "usd/mo") |
| `{typography.footer-link}` | Proxima Nova | 15px | 400 | 18px | 0.2px | Footer links (lowercase) |
| `{typography.nav-label}` | Proxima Nova | 14px | 500 | 16px | 2px | Nav labels |
| `{typography.eyebrow}` | Proxima Nova | 14px | 500 | 16px | 2.03px | Eyebrows, topic chips |
| `{typography.tab}` | Proxima Nova | 14px | 500 | — | — | MONTHLY / GIVE ONCE |
| `{typography.legal}` | Proxima Nova | 14px | 400 | 18.2px | — | Legal line |
| `{typography.button-sm}` | Proxima Nova | 13px | 500 | 32px | 1.3px | Nav GIVE |
| `{typography.form-label}` | Proxima Nova | 12px | 500 | — | — | Uppercase form labels |
| `{typography.button-mobile}` | Proxima Nova | 17px | 500 | — | 2px | Mobile hero CTA |

### Principles
- **Serif for the story, sans for the action.** Every headline is Kazimir Text regular; every control is Proxima Nova.
- **Labels are uppercase and tracked** (≈ 0.1–0.145em); footer links are deliberately lowercase.
- **The root size is 20px**: the `--ds-v1-*` type tokens are rem values (`--ds-v1-heading-2xl: 2.3rem` = 46px, `--ds-v1-heading-3xl: 2.8rem`, `--ds-v1-heading-xl: 1.75rem`, `--ds-v1-text-base: 0.8rem`).
- Headlines are never bold — weight 400 throughout.

### Note on Font Substitutes
Proxima Nova and Kazimir Text are commercial fonts. The Brand Book's own fallback for Proxima Nova is **Avenir**, and it allows **Georgia** for web body copy; use Georgia as the serif substitute for Kazimir Text when it is unavailable.

## Layout

### Spacing System
- **Token scale**: `--ds-v1-spacing-N` = N × 4px (from `--ds-v1-spacing-05: 2px` through `--ds-v1-spacing-50: 200px`).
- **Component padding tokens**: `--ds-v1-component-padding-xxs` 8px, `-xs` 16px, `-sm` 24px, `-md` 48px, `-lg` 60px, `-xl` 104px, `-xxl` 124px.
- **Tokens used here**: `{spacing.xxs}` 4px · `{spacing.xs}` 8px · `{spacing.sm}` 12px · `{spacing.md}` 16px · `{spacing.lg}` 20px · `{spacing.xl}` 24px · `{spacing.button-x}` 40px · `{spacing.section}` 60px · `{spacing.section-xl}` 104px.
- **Max widths**: `--ds-v1-maxwidth-xxs` 240 → `-xs` 320 → `-sm` 400 → `-md` 640 → `-lg` 800 → `-xl` 960 → `-xxl` 1200px.

### Grid & Container
- Hero: full-bleed photo; headline and the 390px donation card stacked in the left half.
- Story sections: centred eyebrow + headline, then a wide rounded photo inset from the page edges.
- Text blocks are centred and narrow (the statistic headline is 750px wide).

### Whitespace Philosophy
Generous vertical space around centred headlines, compact density inside the donation card. Photography provides the visual weight; type stays small and quiet.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | Flat | Page, bands |
| 1 | `rgba(0, 0, 0, 0.25) 0px 4px 4px 0px` | Floating element (measured once) |
| 2 | `rgba(0, 0, 0, 0.16) 1px 1px 12px 5px` | Floating card over photography (measured once) |
| Ring | `rgba(0, 0, 0, 0.1) 0px 0px 0px 2px` | Outline ring (measured once) |

Depth is mostly achieved by placing white cards over photographs (donation card, info card) rather than by heavy shadow.

## Shapes

### Border Radius Scale

| Token | Value | Use |
|---|---|---|
| `{rounded.sm}` | 4px | Buttons, inputs, amount buttons, tabs, donation card (27 occurrences) |
| `{rounded.md}` | 8px | Info and note cards, large photos (14 occurrences) |
| `{rounded.lg}` | 12px | Larger containers (4 occurrences) |
| `{rounded.pill}` | 9999px | Pill shapes (3 occurrences; the topic chips in the capture are pill-shaped) |

### Photography Geometry
Hero photos are full-bleed and square-cornered; in-section photos are large landscape rectangles with softly rounded corners and white cards overlapping their edges.

## Components

### Buttons

**`button-primary`** — JOIN TODAY.
- `{colors.primary}` `#ffca0a`, text `{colors.ink}`, `{typography.button}` 15px/500 uppercase tracked 1.5px, radius 4px, padding `0px 40px`, 48px tall (364px wide in the card). Hover `#ffd53b`.

**`button-primary-md`** — BROWSE FUNDRAISERS / PARTNER WITH US / SPONSOR NOW.
- Same colours, 15px/500/20px tracked 1.35px, padding `16px 24px`, 52px tall.

**`button-give-nav`** — header GIVE.
- 13px/500/32px tracked 1.3px, padding 8px, 32px tall, radius 4px, with a water-drop icon; hover `#ffd438`.

**`button-primary-mobile`** — at 390px the hero CTA ("GIVE TODAY") is 17px/500 tracked 2px, padding 16px, 56px tall.

### Donation form
- **`donation-card`**: white, `1px solid #dfdfd7`, radius 4px, 390px wide, bottom padding 16px.
- **`frequency-tab-selected`**: MONTHLY on yellow, 14px/500 uppercase, radius 4px, 30px tall; GIVE ONCE is transparent grey text.
- **Form label**: `{typography.form-label}` 12px/500 uppercase.
- **`amount-button`**: `#e9eae4` fill, `#9b9b94` text, `1px solid #dfdfd7`, 48px tall, radius 4px; hover `#f5f5f2`. **Selected**: yellow fill and border, ink text. Currency suffix set lowercase/smaller ("usd/mo").
- Impact note: heart icon + "Gives **12 people** clean water every year on average."

### Inputs
**`text-input`** — white, `#333232` text, `1px solid #c1c1ba`, radius 4px, padding `13px 10px`, 48px tall, 16px/400/22.4px.

### Cards
- **`info-card`** — white, radius 8px, padding 24px, 360px wide; body 18px/24px; ends with a `link-primary`.
- **`note-card`** — cream `#f8eed3`, `1px solid #c1c1ba`, radius 8px, padding 16px (the "Thanks to generous private donors…" note).

### Links
**`link-primary`** — uppercase 16px/500 tracked 1.44px, ink text, underlined; `--ds-v1-link-primary-underline: #FFCA0A`, `--ds-v1-link-primary-underline-height: 2px`, `--ds-v1-link-primary-underline-spacing: 3px`. Hover text `#383b36` (`--ds-v1-link-primary-underline-hover: #FFD53B`).

### Navigation
**`nav`** — white bar, 81px tall, black hairline beneath (`--ds-v1-nav-border`). Labels 14px/500 tracked 2px uppercase in `#333232` with chevrons for dropdowns; hover `#676464`. SIGN IN 14px/500/21px tracked 0.9px. GIVE button at the far right after a thin vertical divider.

### Topic chips
HEALTH / EDUCATION / WOMEN / ECONOMIC GROWTH — 14px/500/16px uppercase tracked 2.03px ink labels in white rounded chips laid over the photo; the active chip is tinted.

### Footer
**`footer`** — white, warm-grey `#71716c` lowercase links (15px/400/18px, tracking 0.2px), hover `#9b9b94`, padding `0px 20px 60px`; legal line 14px/18.2px in `#9b9b94`.

## Design System Architecture

charity: water publishes **no public component library or developer design-system documentation** (searches: "charity: water brand guidelines logo colors typeface", "charitywater.org brand assets press kit logo download"). What it publishes is a **Brand Book** ([PDF, 2016](https://d11sa1anfvm2xk.cloudfront.net/media/downloads/brandbook-2016.pdf), linked from the [media page](https://www.charitywater.org/about/media)) covering logo, colours and fonts. The live site carries a versioned token layer that is measurable in `:root`.

### Token architecture
- **Namespace and version**: every token is prefixed `--ds-v1-` ("design system, version 1").
- **Primitive brand tokens**: `--ds-v1-cw-primary: #FFCA0A`, `--ds-v1-cw-black: #000000`, `--ds-v1-cw-white: #FFFFFF`.
- **Semantic tokens**: `--ds-v1-text-default`, `--ds-v1-text-inverted`, `--ds-v1-text-accent`, `--ds-v1-global-text-default`, `--ds-v1-background-light-primary`, `--ds-v1-background-light-secondary`, `--ds-v1-background-dark`.
- **Component tokens**: `--ds-v1-button-primary-bg`, `--ds-v1-button-primary-bg-hover`, `--ds-v1-button-primary-text`, `--ds-v1-link-primary-text`, `--ds-v1-link-primary-underline`, `--ds-v1-link-primary-underline-height`, `--ds-v1-nav-bg`, `--ds-v1-nav-border`, `--ds-v1-nav-button-primary`, `--ds-v1-nav-button-secondary-border`, `--ds-v1-nav-dropdown-border`, `--ds-v1-social-facebook` etc.
- **Scales**: `--ds-v1-spacing-0…50` (4px steps), `--ds-v1-component-padding-xxs…xxl`, `--ds-v1-maxwidth-xxs…xxl`, `--ds-v1-heading-xs…3xl`, `--ds-v1-text-3xs…lg`, `--ds-v1-text-leading-*`.
- One unresolved value ships as literal Sass text — `--ds-v1-background-light-primary-with-opacity: rgba(#{*cwYellow100}, #{*cwBgDefaultOpacity})` — showing the tokens are generated from Sass variables (names like `cwYellow100`).

### Theming
No dark mode or alternate theme was observed. Light/dark surfaces are expressed as `background-light-*` / `background-dark` tokens.

### Type & spacing systems
4px spacing base; rem type scale against a 20px root; uppercase tracked labels as a utility class (`heading-xs` on nav labels). Tailwind utility classes are also present in markup (`w-full`, `flex`, `items-center`, `justify-center`), and some sections are rendered by a page builder (`builder-block` classes).

### Component model
Observable classes: `button`, `button--grey-20`, `amount-button`, `amount-option`, `toggle-monthly`, `toggle-one-time`, `selected`, `form-label`, `cw-link--primary`, `cw-footer`, `log-in`. No official inventory is published.

### Accessibility
No published accessibility standard was found. Measured: 48px controls in the donation flow, 32px nav GIVE button, ink `#222520` on yellow `#ffca0a`.

### Delivery
No npm package or Figma kit was found. Logo files (JPG/EPS, horizontal/vertical, black/white) are downloadable from the media page.

## Do's and Don'ts

### Do
- Lead with documentary photography of real people and clean water.
- Use Kazimir Text regular for headlines and Proxima Nova for everything else.
- Reserve `{colors.primary}` yellow for giving actions and selected states.
- Track uppercase labels (2px at 14px, 1.5px at 15px).
- Keep buttons and inputs at 4px radius and 48px tall in forms.
- Write the name in lowercase with the colon and space: "charity: water" (Brand Book).

### Don't
- Don't capitalize the name or drop the colon (Brand Book "Common Mistakes").
- Don't change the wordmark font or skew the logo (Brand Book).
- Don't put the logo on a cluttered background (Brand Book).
- Don't bold the serif headlines.
- Don't introduce a second action colour; the yellow is the Jerry Can.
- Don't use pure white text on yellow — button text is `#222520`.

## Responsive Behavior

### Breakpoints
Exact breakpoints were not measured.

### Measured changes at 390px
- h1 46px/52px → 35px/40px.
- Hero CTA becomes "GIVE TODAY", 17px/500 tracked 2px, padding 16px, 56px tall.
- Legal line stays 14px/18.2px.

### Touch Targets
Donation controls are 48px tall; the mobile hero CTA is 56px.

### Collapsing Strategy
Mobile layout of the donation card and headline was not measured.

### Image Behavior
Hero imagery stays full-bleed; story photos keep rounded corners and the overlapping white info card.

## Iteration Guide

1. Start with a full-bleed photograph and a white Kazimir Text `{typography.display}` headline.
2. Put the donation form in a white 4px-radius card; selected states in `{colors.primary}`.
3. Use `button-primary` for the main giving action; `button-primary-md` for secondary yellow CTAs.
4. Alternate white and cream (`#f8eed3` / `#faf7f0`) bands.
5. Eyebrows: `{typography.eyebrow}` uppercase; links: `link-primary` with the 2px yellow underline.
6. Footer: lowercase `#71716c` links.
7. Run `node web/scripts/verify-designs.mjs --slug=charity-water` after edits.
