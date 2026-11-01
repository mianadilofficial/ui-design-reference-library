---
version: alpha
name: UPS
category: "Logistics & Mobility"
description: "UPS (ups.com) runs a white, utility-first homepage set entirely in Roboto (400 headings at 48px/40px/32px, 16px/24px body, 500 for buttons and links), with UPS Gold (#ffc400) pill buttons 46px tall at a 40px radius that lighten to #ffd64c and gain a layered shadow on hover, near-black text #121212, link blue #0662bb, 16px-radius cards on warm off-white #fcfaf8, a #f2f1ef utility bar and a UPS brown (#351c15) footer."

colors:
  primary: "#ffc400"
  primary-hover: "#ffd64c"
  on-primary: "#121212"
  canvas: "#ffffff"
  ink: "#121212"
  ink-muted: "#5f5753"
  black: "#000000"
  link: "#0662bb"
  link-hover: "#105497"
  brown: "#351c15"
  on-brown: "#bfb8af"
  utility-bar: "#f2f1ef"
  card-cream: "#fcfaf8"
  teal: "#0a8080"
  alert-yellow: "#ffd700"
  white: "#ffffff"
  error: "#df2901"
  secondary-hover: "#418ed926"
  secondary-hover-dark: "#e3eef9"
  brown-accent: "#c67d30"
  gray-4: "#dfdbd7"

typography:
  display:
    fontFamily: "roboto, roboto-fallback, tahoma, helvetica, arial, sans-serif"
    fontSize: 48px
    fontWeight: 400
    lineHeight: 56px
  heading-xl:
    fontFamily: "roboto, roboto-fallback, tahoma, helvetica, arial, sans-serif"
    fontSize: 40px
    fontWeight: 400
    lineHeight: 48px
  heading-xl-mobile:
    fontFamily: "roboto, roboto-fallback, tahoma, helvetica, arial, sans-serif"
    fontSize: 28px
    fontWeight: 400
    lineHeight: 36px
  heading-lg:
    fontFamily: "roboto, roboto-fallback, tahoma, helvetica, arial, sans-serif"
    fontSize: 32px
    fontWeight: 400
    lineHeight: 40px
  heading-lg-strong:
    fontFamily: "roboto, roboto-fallback, tahoma, helvetica, arial, sans-serif"
    fontSize: 32px
    fontWeight: 500
    lineHeight: 40px
  body:
    fontFamily: "roboto, roboto-fallback, tahoma, helvetica, arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  label:
    fontFamily: "roboto, roboto-fallback, tahoma, helvetica, arial, sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
  button:
    fontFamily: "roboto, roboto-fallback, tahoma, helvetica, arial, sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 19.2px
  utility:
    fontFamily: "roboto, roboto-fallback, tahoma, helvetica, arial, sans-serif"
    fontSize: 15px
    fontWeight: 400
    lineHeight: 22.5px
  footer:
    fontFamily: "roboto, roboto-fallback, tahoma, helvetica, arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px

rounded:
  xs: 2px
  sm: 4px
  md: 6px
  lg: 8px
  card: 16px
  pill-sm: 32px
  pill: 40px
  pill-lg: 64px
  circle: 50%

spacing:
  xs: 4px
  sm: 8px
  md: 10px
  base: 12px
  lg: 16px
  xl: 20px
  xxl: 24px
  xxxl: 32px
  section: 40px
  section-lg: 48px
  huge: 64px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.label}"
    rounded: "{rounded.pill}"
    border: "1px solid #ffc400"
    padding: 10px 24px
    height: 46px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    border: "1px solid #ffd64c"
    boxShadow: "rgba(0, 0, 0, 0.08) 0px 3px 7px 0px, rgba(0, 0, 0, 0.09) 0px 6px 12px -2px, rgba(0, 0, 0, 0.1) 0px 15px 32px -3px"
  button-primary-compact:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    border: "1px solid #ffc400"
    padding: 10px 24px
    height: 41px
  button-secondary:
    textColor: "{colors.link}"
    typography: "{typography.button}"
    rounded: "{rounded.pill-sm}"
    border: "1px solid #0662bb"
    padding: 10px 24px
    height: 41px
  segmented-tab:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.pill-lg}"
    padding: 8px 12px
    height: 40px
  segmented-tab-active:
    backgroundColor: "{colors.teal}"
    textColor: "{colors.white}"
  text-input:
    backgroundColor: "{colors.white}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.sm}"
    border: "1px solid #5f5753"
    padding: 24px 32px 8px 12px
    height: 54px
  card-teaser:
    backgroundColor: "{colors.white}"
    textColor: "{colors.ink}"
    rounded: "{rounded.card}"
    boxShadow: "rgba(0, 0, 0, 0.1) 0px 20px 40px 0px"
    padding: 40px
  card-quick-action:
    backgroundColor: "{colors.white}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.card}"
    boxShadow: "rgba(0, 0, 0, 0.1) 0px 18px 36px -18px, rgba(59, 35, 20, 0.25) 0px 30px 45px -30px"
    padding: 24px
  card-solution:
    backgroundColor: "{colors.card-cream}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.card}"
    boxShadow: "rgba(0, 0, 0, 0.08) 0px 15px 32px -3px, rgba(0, 0, 0, 0.08) 0px 4px 12px -2px, rgba(0, 0, 0, 0.06) 0px 2px 6px 0px"
    padding: 16px
  nav:
    backgroundImage: "linear-gradient(rgb(242, 241, 239) 96px, rgb(255, 255, 255) 56px)"
    textColor: "{colors.ink}"
    typography: "{typography.label}"
    boxShadow: "rgba(18, 18, 18, 0.1) 2px 0px 10px 0px"
    height: 204px
  link:
    textColor: "{colors.link}"
    typography: "{typography.label}"
  link-hover:
    textColor: "{colors.link-hover}"
  footer:
    backgroundColor: "{colors.brown}"
    textColor: "{colors.on-brown}"
    typography: "{typography.footer}"
    padding: 24px 60px 48px
---

## Overview

UPS's US homepage (measured at https://www.ups.com/us/en/home, title "UPS Global Shipping and Logistics Solutions | Ship and Track Online | UPS - United States") is a task-first utility page rather than a brand showcase. Its job is to get people to track a package, ship, or log in, and the design follows: a white canvas, plain Roboto type, one loud colour (UPS Gold `{colors.primary}` #ffc400) reserved for action buttons, and UPS brown (`{colors.brown}` #351c15) as the anchoring dark colour.

From top to bottom in the capture: a thin yellow alert strip ("IEEPA Tariff Refunds"), a warm grey utility bar (`{colors.utility-bar}` #f2f1ef) with "Find Closest UPS Location", "Service Alerts", locale and "Support" as small underlined links, then the white main header with the gold-and-brown UPS shield, four menu items ("Shipping", "Tracking", "Products & Services", "The UPS Store"), a search icon and a gold pill "Log In ›".

The hero is not a photo but a large white **tracking card** (16px radius, soft drop shadow) floating over a brown curved swoosh. It holds a 3D illustrated icon, the 48px word "Tracking", a tall floating-label input ("Tracking Number or InfoNotice®"), a gold "Track ›" pill and a "Need help changing your delivery? Get Help" link. To its right, two smaller quick-action cards ("Shipping", "How Can We Help You?") with 3D icons and expand glyphs.

Below: a centred 40px "Solutions for Everyone" headline with a short gold underline, a teal Business/Personal segmented toggle, and four warm off-white solution cards (32px titles, 16px copy, blue "See Pickup Options ›" links). Then a photo band with a white login-promo card ("Log In for Less Guessing and More Control" in brown 32px / 500), and a "Delivering What Matters" section with vertically ruled stat callouts ("8 Years", "200+", "20.8M") beside a rounded photo carousel with a brown gradient caption bar and a gold circular arrow button.

**Key Characteristics:**
- White canvas; warm neutrals (#f2f1ef utility bar, #fcfaf8 cards) instead of cool greys.
- UPS Gold #ffc400 pill buttons with near-black #121212 labels; hover #ffd64c plus a lift shadow.
- Roboto everywhere; headings are regular (400) weight at 48 / 40 / 32px.
- Link blue #0662bb, hover #105497.
- 16px-radius cards with soft, warm-tinted layered shadows.
- UPS brown #351c15 footer with #bfb8af text.
- 3D-rendered spot illustrations in brown and gold.

## Colors

Values measured on https://www.ups.com/us/en/home (computed styles, hover states, `:root` variables). The site's own variable names are given in parentheses.

### Brand & Accent
- **UPS Gold** `{colors.primary}` #ffc400 (`--gold`) — fill and border of every action button ("Log In", "Track", "Create a Profile").
- **Gold hover** `{colors.primary-hover}` #ffd64c (`--gold-light`) — measured hover fill and border.
- **On primary** `{colors.on-primary}` #121212 (`--ups-black`) — label on gold.
- **UPS brown** `{colors.brown}` #351c15 (`--brown`, `--ups-brown-digital`) — footer background, the login-promo headline colour.
- **Teal** `{colors.teal}` #0a8080 (`--teal`) — the active segment of the Business/Personal toggle (small measured background area and border).
- **Brown accent** `{colors.brown-accent}` #c67d30 (`--brown-2`) — declared accent.
- **Alert yellow** `{colors.alert-yellow}` #ffd700 — a small measured background area (the top alert strip region).

### Surface
- **Canvas** `{colors.canvas}` #ffffff — largest painted area.
- **Utility bar** `{colors.utility-bar}` #f2f1ef (`--gray-5`) — top utility bar (the header's gradient starts with this colour for its first 96px) and the area behind the hero.
- **Card cream** `{colors.card-cream}` #fcfaf8 — solution cards.
- **Gray 4** `{colors.gray-4}` #dfdbd7 (`--gray-4`) — declared warm grey (used in `--gray-gradient`).

### Text
- **Ink** `{colors.ink}` #121212 (`--ups-black`, `--va-font-color`) — most-read text colour (4877 weighted chars).
- **Ink muted** `{colors.ink-muted}` #5f5753 (`--gray-1`) — secondary text, input border.
- **Black** `{colors.black}` #000000 — utility-bar links.
- **On brown** `{colors.on-brown}` #bfb8af (`--gray-3`) — footer text (second most-read colour).

### Links & interaction
- **Link** `{colors.link}` #0662bb (`--blue`, `--link-color`) — inline and card links, outlined secondary button.
- **Link hover** `{colors.link-hover}` #105497 (`--blue-darker`, `--link-hover-color`) — measured hover colour of "Get Help".
- **Secondary hover** `{colors.secondary-hover}` #418ed926 (`--secondary-hover-bg-color`) and `{colors.secondary-hover-dark}` #e3eef9 (`--secondary-dark-hover-bg-color`) — declared hover fills for secondary buttons (not triggered in the measurement).
- **Error** `{colors.error}` #df2901 (`--error-red`).

### Gradients declared in `:root`
`--brown-gradient: linear-gradient(18.83deg, #7e5844 37.21%, #69422d 100%)`, `--blue-gradient`, `--teal-gradient`, `--gray-gradient`, `--healthcare-blue-gradient`, `--various-gradient`, `--ups-store-blue`. The capture shows brown gradients on the hero swoosh and the carousel caption bar; which variable each uses was not measured.

## Typography

### Font Family
The site self-hosts **Roboto** under the family name `roboto` with a metric-adjusted `roboto-fallback` face; the stack is `roboto, roboto-fallback, tahoma, helvetica, arial, sans-serif` (`--body-font-family`). Loaded weights: 400, 500, 700. A separate stack `"Roboto",system-ui,-apple-system,Segoe UI,Arial,sans-serif` is declared for the virtual-assistant chat (`--va-font-family`, `--chat-font-family`).

Roboto accounts for all measured text (6675 weighted characters).

### Hierarchy (measured, desktop 1280px)

| Token | Size | Weight | Line height | Used for |
|---|---|---|---|---|
| `display` | 48px | 400 | 56px | "Tracking" title in the hero card |
| `heading-xl` | 40px | 400 | 48px | section headings ("Solutions for Everyone", h2) |
| `heading-lg` | 32px | 400 | 40px | solution-card titles ("Schedule Package Pickups") |
| `heading-lg-strong` | 32px | 500 | 40px | login promo headline (in brown) and stat numbers |
| `body` | 16px | 400 | 24px | paragraphs, inputs, segmented tabs |
| `label` | 16px | 500 | 24px | nav items, card links, buttons |
| `button` | 16px | 500 | 19.2px | compact "Log In" / "Sign Up" buttons |
| `utility` | 15px | 400 | 22.5px | utility-bar links, alert strip |
| `footer` | 14px | 400 | 21px | footer links |

"Delivering What Matters" uses 40px / 400 with an 80px line height. A 13.008px size with 0.13008px letter spacing and an 18px size also appear in the frequency tables; their weights were not isolated, so they are not tokenised.

The site declares heading variables `--heading-font-size-xl: 2rem` (32px), `--heading-font-size-l: 1.75rem` (28px), `--heading-font-size-m` / `-s: 1.25rem` (20px) and body variables `--body-font-size-m/l: 1rem`, `-s: 0.875rem`, `-xs: 0.75rem`.

### Mobile (390px)
| Token | Size | Weight | Line height |
|---|---|---|---|
| `heading-xl-mobile` | 28px | 400 | 36px |
| `body` (unchanged) | 16px | 400 | 24px |
| `label` (CTA, unchanged) | 16px | 500 | 24px |

### Principles
- Headlines are big but regular weight — no bold display type.
- Weight 500 marks interactive text (buttons, nav, links).
- Title case is used in headings and card titles ("Schedule Package Pickups", "Delivering What Matters").
- Letter spacing is `normal` except for the small 13.008px text.

### Note on Font Substitutes
Roboto is open source (Apache 2.0) on Google Fonts; no substitute is needed. Keep the 400 / 500 weights.

## Layout

### Spacing System
Measured paddings: 20px (38), 16px (28), 11px (25), 24px (14), 10px (11), 32px (8), 8px, 40px, 12px, 25px, 30px. Measured gaps: 16px (29), 12px (15), 8px (13), 32px (6), 24px (6), 64px (5), 10px, 20px, 48px. The site declares `--section-inline-padding: 1.5rem` (24px) and `--max-content-width: 1392px`; content measured 1216px wide at 1280px.

### Grid & Container
- Hero: tracking card 886px wide + a 234px column of quick-action cards.
- Solutions: four cards, 260px wide each, in a 1216px row.
- Stats + carousel: narrow stat column left, wide rounded photo right.

### Section Recipes (seen in the capture)
1. **Alert strip + utility bar** — thin, small type, underlined links.
2. **Header** — shield logo, four menu items, search, gold "Log In ›".
3. **Tracking hero** — white card on a brown swoosh: illustration, 48px title, floating-label input, gold "Track ›", help link, secondary quick links.
4. **Solutions** — centred 40px heading with a short gold rule, segmented toggle, four cream cards with blue links.
5. **Promo band** — photo background with an inset white card, 3D icon, brown 32px / 500 headline, gold button.
6. **Stats + carousel** — thin vertical rules beside stat numbers; photo carousel with brown gradient caption and gold round arrow.

### Whitespace Philosophy
Functional and roomy: cards float with generous outer spacing; internal padding is moderate (16px–40px).

### Voice & Microcopy
Plain, helpful, imperative: "Track", "Log In", "Need help changing your delivery? Get Help", "See Pickup Options", "Get Started", "Order Now", "Book Now". Chevron "›" glyphs follow every action label.

### Motion
Hover on gold buttons swaps the fill to #ffd64c and adds a three-layer shadow (`--cta-hover-shadow`). The "Cookie Settings" button fades to opacity 0.9 on hover. The underlined "Privacy Notice" link loses its underline on hover; "Get Help" changes to #105497.

## Elevation & Depth

| Level | Value | Where |
|---|---|---|
| Header | `rgba(18, 18, 18, 0.1) 2px 0px 10px 0px` | main header |
| Small card | `rgba(0, 0, 0, 0.05) 0px 4px 12px -3px, rgba(0, 0, 0, 0.14) 0px 2px 5px 0px` | 11 elements |
| Solution card | `rgba(0, 0, 0, 0.08) 0px 15px 32px -3px, rgba(0, 0, 0, 0.08) 0px 4px 12px -2px, rgba(0, 0, 0, 0.06) 0px 2px 6px 0px` | 4 cards |
| Quick-action card | `rgba(0, 0, 0, 0.1) 0px 18px 36px -18px, rgba(59, 35, 20, 0.25) 0px 30px 45px -30px` | "Shipping", "How Can We Help You?" |
| Teaser card | `rgba(0, 0, 0, 0.1) 0px 20px 40px 0px` | tracking card |
| CTA hover | `rgba(0, 0, 0, 0.08) 0px 3px 7px 0px, rgba(0, 0, 0, 0.09) 0px 6px 12px -2px, rgba(0, 0, 0, 0.1) 0px 15px 32px -3px` | gold buttons on hover |

Shadows are soft, layered and long; the quick-action shadow uses a warm brown tint (rgba(59, 35, 20, 0.25)). The site also declares `--elevation-shadow: 0 2px 6px #00000026,0 1px 2px #0000004d`.

### Decorative Depth
The brown curved swoosh behind the hero and the 3D-rendered brown/gold icons (map pin, package, person with clipboard) provide depth.

## Shapes

### Border Radius Scale

| Token | Value | Where |
|---|---|---|
| `xs` | 2px | 1 element |
| `sm` | 4px | text input (18 elements) |
| `md` | 6px | login flyout card |
| `lg` | 8px | 1 element; hero teaser wrapper |
| `card` | 16px | all cards (10 elements) |
| `pill-sm` | 32px | full-width "Log In" / "Sign Up" in the login flyout |
| `pill` | 40px | gold action buttons |
| `pill-lg` | 64px | segmented toggle and its tabs |
| `circle` | 50% | icon buttons, carousel dots (28 elements) |

The "Skip to Main Content" button uses a bottom-only `0px 0px 20px 20px` radius (a tab hanging from the top edge).

## Components

### Buttons

**`button-primary`** — "Track", header "Log In", "Create a Profile".
- Background `{colors.primary}` #ffc400, 1px solid #ffc400 border, text #121212, `{typography.label}` 16px / 500 / 24px, padding 10px 24px, height 46px, radius 40px. A "›" chevron follows the label.
- Hover (`button-primary-hover`): background and border #ffd64c, shadow `rgba(0, 0, 0, 0.08) 0px 3px 7px 0px, rgba(0, 0, 0, 0.09) 0px 6px 12px -2px, rgba(0, 0, 0, 0.1) 0px 15px 32px -3px`.

**`button-primary-compact`** — 16px / 500 / 19.2px, height 41px, same colours and padding.

**`button-secondary`** — "Sign Up" in the login flyout: transparent, text #0662bb, 1px solid #0662bb, radius 32px, padding 10px 24px, height 41px.

The cookie banner's "Cookie Settings" button is white with #0662bb text and border, 36px radius, 42px tall; hover lowers opacity to 0.9.

### Segmented control

**`segmented-tab`** — "Business" / "Personal": 16px / 400 / 24px, padding 8px 12px, height 40px, radius 64px, inside a 64px-radius outlined group. **`segmented-tab-active`**: white text on teal #0a8080.

### Inputs & Forms

**`text-input`** — tracking number field: background #ffffff, text #121212, 16px / 24px, border 1px solid #5f5753, radius 4px, padding 24px 32px 8px 12px (room for a floating label above the value), height 54px, 570px wide.

### Cards & Containers

**`card-teaser`** — the tracking hero card: white, radius 16px, shadow `rgba(0, 0, 0, 0.1) 0px 20px 40px 0px`, inner padding 40px, 886px × 410px.

**`card-quick-action`** — "Shipping", "How Can We Help You?": white, radius 16px, padding 24px, warm layered shadow, 234px wide.

**`card-solution`** — "Schedule Package Pickups" etc.: #fcfaf8, radius 16px, padding 16px, layered shadow, 260px × 337px; 32px / 400 title, 16px copy, `link` with chevron.

### Navigation

**`nav`** — 204px tall header stack: #f2f1ef utility bar (first 96px of the gradient), then the white main bar; shadow `rgba(18, 18, 18, 0.1) 2px 0px 10px 0px`. Menu items 16px / 500 / 24px in #121212 with 16px vertical padding (56px tall). Utility links 15px / 22.5px, underlined, black. The site declares `--header-height: 108px` and `--global-alert-height: 40px`.

### Links

**`link`** — #0662bb, 16px / 500 (card links) or 16px / 400 underlined (inline). Hover (`link-hover`): #105497.

### Footer

**`footer`** — background #351c15, text #bfb8af, 14px / 21px, padding 24px 60px 48px, 620px tall; columns start with "Support" ("Help and Support Center" …).

## Design System Architecture

UPS publishes **no public design system**, component library or token package for ups.com. Searches: "UPS brand guidelines colors UPS Brown Gold pantone official", "UPS digital design system ups.com component library \"design system\" UPS", "about.ups.com media kit logo usage guidelines UPS shield", "UPS brandmark guidelines editorial use logo download" (restricted to ups.com). Results for colour codes came only from third-party aggregator sites, which are not used here.

The official brand resources found are gated: the UPS Media Library (https://brand.ups.com/us/en/media-library.html) offers image and video collections and states that "UPS images and brandmarks on this site may be used under these guidelines only by press agencies and journalists publishing articles specifically about UPS … for editorial purposes", that brandmarks "must appear with the appropriate register marks, and may not be altered in any manner", and that the logo may not be redistributed. Detailed brand guidelines sit behind registration (brand.ups.com).

**De-facto system measurable on ups.com** (from `:root` on https://www.ups.com/us/en/home):
- **Token tier.** A flat set of about 90 custom properties mixing primitives and a few roles: primitives `--gold: #ffc400`, `--gold-light: #ffd64c`, `--brown: #351c15`, `--blue: #0662bb`, `--blue-darker: #105497`, `--teal: #0a8080`, numbered warm greys `--gray-1: #5f5753` … `--gray-5: #f2f1ef`; role aliases `--link-color: var(--blue)`, `--link-hover-color: var(--blue-darker)`, `--text-color: var(--ups-black)`, `--background-color: var(--white)`, `--cta-hover-shadow`, `--elevation-shadow`; and a namespaced group for the virtual assistant (`--va-font-family`, `--va-form-input-control-border: 1px solid #5f5753`, `--va-form-fields-focus-border: 2px solid #0662bb`).
- **Theming.** No dark mode or theme switch observed. Business-line gradients are declared as variables (`--healthcare-blue-gradient`, `--ups-store-blue`, `--teal-gradient`). The measured homepage did not use them in a way the extraction could attribute.
- **Type & spacing.** Roboto with rem-based size variables (`--heading-font-size-xl: 2rem` … `--body-font-size-xs: 0.75rem`); layout variables `--max-content-width: 1392px`, `--section-inline-padding: 1.5rem`, `--header-height: 108px`.
- **Component model.** Class names such as `teaser-card-0`, `enhanced-app-teaser`, `solution-card`, `solution-cards-wrapper`, `action-group`, `Business-tag`, `nav-sections`, `button-wrapper` describe block-based sections. Measurable components: gold pill buttons, outlined secondary, segmented toggle, floating-label input, three card types, header, footer.
- **Accessibility.** A "Skip to Main Content" button is present in the DOM (gold, bottom-rounded tab, translated off its anchor position at rest). The VA form declares a 2px #0662bb focus border. No public accessibility standard was found.
- **Delivery.** No npm package or public Figma kit found.

## Do's and Don'ts

### Do
- Keep the canvas white and reserve UPS Gold #ffc400 for action buttons.
- Use #121212 labels on gold, 40px pill radius, 10px 24px padding, 46px height, and a "›" chevron.
- On hover, lighten gold to #ffd64c and add the layered lift shadow.
- Set headings in Roboto 400 (48 / 40 / 32px); use 500 for buttons, nav and links.
- Use #0662bb for links (hover #105497).
- Use 16px-radius cards with soft, layered shadows; cream #fcfaf8 for solution cards.
- Use warm neutrals (#f2f1ef, #5f5753, #bfb8af) rather than cool greys.
- Close the page with a #351c15 brown footer.

### Don't
- Don't use gold for text or large backgrounds; it is an action colour.
- Don't bold headlines.
- Don't use square or slightly rounded buttons — actions are pills.
- Don't use pure black for body text; ink is #121212.
- Don't use cool blue-grey neutrals.
- Don't take brown/gold values from third-party colour-code sites — use the live #351c15 and #ffc400.
- Don't recreate or alter the shield logo; brandmark use is restricted.

## Responsive Behavior

### Breakpoints
Not captured. Only 1280px and 390px were measured.

### Measured changes (1280px → 390px)
| Element | Desktop | Mobile |
|---|---|---|
| Section heading | 40px / 48px | 28px / 36px |
| Body | 16px / 24px | 16px / 24px |
| Primary CTA | 46px tall, 40px radius | 46px tall, 294px wide |
| Header gradient | grey band 96px | grey band 76.8px |

Mobile size frequencies: 16px (4669), 18px, 13.008px, 14px, 20px, 32px, 28px, 24px.

### Touch Targets
Gold buttons are 41–46px tall; segmented tabs 40px; the tracking input 54px.

### Collapsing Strategy

### Image Behavior
Photography sits inside rounded containers (carousel) or as a full-width band behind an inset card.

## Iteration Guide

1. White canvas, Roboto 400/500, ink #121212.
2. Header: #f2f1ef utility bar with 15px underlined links, then white bar with shield, 16px / 500 menu, gold "Log In ›" pill.
3. Hero: white 16px-radius tracking card (shadow `rgba(0, 0, 0, 0.1) 0px 20px 40px 0px`) on a brown swoosh, 48px / 400 "Tracking", 54px floating-label input with a #5f5753 border and 4px radius, gold "Track ›".
4. Solutions: 40px / 400 centred heading, teal segmented toggle, four #fcfaf8 cards with 32px titles and #0662bb links.
5. Footer: #351c15 with #bfb8af 14px links.
6. Check: gold only on buttons, regular-weight headings, warm neutrals, pill CTAs.

### Common Mistakes When Recreating UPS
- Using an aggregator-site "UPS gold" instead of the live #ffc400.
- Making headings bold.
- Using brown for buttons; brown is for the footer and select headlines.
- Forgetting the floating-label input geometry (24px top padding).
- Flat cards without the soft layered shadow.
