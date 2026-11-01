---
version: alpha
name: SpareBank 1
category: "Design Systems"
description: SpareBank 1 is a Norwegian banking alliance whose site pairs a white canvas and near-black ink (#020a0a) with deep navy "fjell" (#002776), water blue (#005aa4) and a forest-green pill CTA (#00754e), set in the proprietary SpareBank1-regular, SpareBank1-medium and SpareBank1-title-medium typefaces with Arial fallbacks. Buttons are fully rounded pills, cards carry a 16px radius, and flat editorial illustration sits beside warm documentary photography.
colors:
  canvas: "#ffffff"
  ink: "#020a0a"
  primary: "#00754e"
  on-primary: "#ffffff"
  ink-muted: "#4a5155"
  fjell: "#002776"
  vann: "#005aa4"
  surface-charcoal: "#262626"
  surface-sand: "#fdf8f5"
  surface-frost: "#d8e9f2"
  card-border: "#020a0a33"
  docs-action: "#084f91"
  docs-action-subtle: "#f7fafd"
  docs-action-subtle-text: "#08235e"
typography:
  display:
    fontFamily: SpareBank1-title-medium, arial, sans-serif
    fontSize: 36px
    fontWeight: 400
    lineHeight: 44px
  display-mobile:
    fontFamily: SpareBank1-title-medium, arial, sans-serif
    fontSize: 24px
    fontWeight: 400
    lineHeight: 28px
  body:
    fontFamily: SpareBank1-regular, arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 4px
  sm: 15px
  md: 16px
  lg: 22px
  xl: 30px
  2xl: 35px
  3xl: 96px
  4xl: 100px
spacing:
  s1: 4px
  s2: 8px
  s3: 10px
  s4: 15px
  s5: 16px
  s6: 17px
  s7: 20px
  s8: 24px
  s9: 25px
  s10: 34px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
    rounded: "{rounded.xl}"
    padding: 8px 16px
    height: 44px
  button-pill:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
    rounded: "{rounded.3xl}"
    padding: 8px 24px
    height: 44px
  button-outline:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.vann}"
    typography: "{typography.body}"
    rounded: "{rounded.3xl}"
    borderColor: "{colors.vann}"
    padding: 8px 24px
    height: 44px
  button-docs-primary:
    backgroundColor: "{colors.docs-action}"
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
    rounded: "{rounded.3xl}"
    padding: 6px 16px
    height: 40px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.fjell}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.md}"
    borderColor: "{colors.card-border}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.fjell}"
---

## Overview

SpareBank 1 presents itself as a friendly, plain-spoken Norwegian retail bank rather than a financial institution in a suit. The homepage capture shows a white page (canvas #ffffff) carrying near-black body copy (#020a0a), with deep navy (#002776) reserved for headlines and the header, and a brighter water blue (#005aa4) for links, outlined buttons and icon strokes. The single warm, high-contrast action color is forest green (#00754e), which appears on the "Bli kunde" (become a customer) pill and on the "Se mer" (see more) pill under the hero. Everything is Norwegian-language, and the microcopy is conversational: "Bytte bank til oss?", "Tusen takk til alle som rekker opp hånda i hele Norge", "Nytt og nyttig".

The hero area is a split composition. On the left sits a blue band with a flat illustration of Norwegian landmarks, a navy headline in the title typeface and a short supporting sentence; on the right is a full-bleed documentary photograph of a person cycling through a town street. Below, a six-up grid of service categories (home loans, daily banking, saving, insurance, car loans, customer service) uses flat, slightly naive illustrations, each with a navy underlined heading and a short list of underlined links in blue. Two side-by-side promo bands, one in pale frost blue (#d8e9f2) and one in warm sand (#fdf8f5), carry illustrated characters and outlined pill buttons. The page closes with a "Nytt og nyttig" news row: four photo cards with uppercase category labels (NYHETER, TIPS OG RÅD) and bold navy headlines.

On load a cookie dialog covers the page. It is a white modal with a navy title, a cookie icon, checkboxes and pill-shaped outlined buttons ("Godta alle", "Kun nødvendige", "Lagre innstillinger"), which shows that the outlined pill is the system's default secondary action and that even consent screens follow the same shape language.

## Colors

The palette comes from a named Norwegian-nature scheme. The measured and documented core is:

- **Canvas #ffffff** is the page background, covering the largest area of the page.
- **Ink #020a0a** is the most-read text color; it is the "svart" neutral in the system's own color file.
- **Fjell #002776** (mountain) is the navy used for headings, the navigation text and the footer text token, and for the deepest background bands.
- **Vann #005aa4** (water) is the link, outline and icon color. Underlined link lists in the service grid and the outline of secondary pills use it.
- **Primary #00754e** is the forest-green fill of the filled call-to-action pills, with white (#ffffff) label text. It is the "skog" color in the system's palette.
- **Ink-muted #4a5155** is the secondary-text grey used on captions and meta lines.
- **Surface-charcoal #262626** is a dark grey section background measured on the page.
- **Surface-sand #fdf8f5** and **surface-frost #d8e9f2** are the two soft tints behind the promo bands.
- **Card-border #020a0a33** is the ink at roughly 20 percent opacity, used as the hairline around news cards.

Three further values come from the component Storybook, not the homepage: **docs-action #084f91** (the filled button in light mode), **docs-action-subtle #f7fafd** with label color **docs-action-subtle-text #08235e** (the accent-mode button). They show that the component library's semantic button color is a deeper blue than the green used on the marketing site, so a product UI built with the library will look bluer than the homepage.

Color is used sparingly. Large flat fields are blue, frost or sand; green appears only on actions. Because the generated primary is the marketing CTA, the docs-action values should be treated as the application-side variant, not a replacement.

## Typography

Three proprietary families carry the whole site, all declared with an Arial then generic sans-serif fallback: **SpareBank1-title-medium** for headlines, **SpareBank1-medium** for emphasised text and buttons in the component library, and **SpareBank1-regular** for body copy. The font files are distributed through the design system's own `@sb1/ffe-webfonts` package; there is no open substitute, so Arial is the declared fallback.

The display token is 36px at weight 400 with a 44px line height, shrinking to 24px on a 390px-wide phone with a 28px line height. Body is 16px at weight 400 and 24px line height. The measured page also uses 14px for navigation tabs (uppercase) and meta text, 20px and 22px for card headings, 28px for the library's section titles, and 18px, 15px and 24px in smaller roles. The title typeface has only one visible weight, so hierarchy comes from size, navy color and underlines rather than from bold. Link lists are underlined in water blue, which keeps them legible as links without a color change on hover being the only cue.

The system's own typography stylesheet sets heading line heights in rem units (the h1 uses 2.25rem, the h2 1.75rem) and uses tabular numerals for small text, which suits a bank displaying amounts.

## Layout

The page is a centered column on a 1280px desktop viewport. The six-category service grid is three columns by two rows with generous vertical air; the promo bands are two equal halves that touch edge to edge; the news row is four equal cards across the full width with a small gutter. Spacing follows an 8px base: the library's spacing scale runs 4px, 8px, 16px, 24px, 32px, 40px and so on in multiples of 8, and the homepage measures paddings of 16px, 8px, 20px and 24px most often, with gaps of 8px and 16px.

Density is relaxed. Sections are separated by large white margins rather than rules, and illustrations are allowed to bleed past their containers. The header is a two-tier bar: audience tabs (PRIVAT, BEDRIFT, OM OSS) in small uppercase, a search field, the green "Bli kunde" pill and an outlined "Logg inn" pill on the first row, and a product row (such as "Daglig bruk") on the second. A round blue scroll-to-top button floats at the left edge.

## Elevation & Depth

Depth is minimal. Most surfaces are flat and separated by color fields, not shadows. The cards in the news row use a 1px hairline in card-border (#020a0a33) with a 16px radius, and the sticky scroll button and a few widgets carry a soft grey drop shadow. The consent modal sits on a dimmed overlay and is the only strongly layered element. Do not stack shadows on buttons: the pills stay flat, and emphasis is created with a color swap between filled and outlined states.

## Shapes

Roundness is the signature. The measured radius scale is 4px (inputs and small chips), 15px and 16px (cards and the top corners of tiles), 22px, 30px, 35px, 96px and 100px. The primary header CTA uses 30px, while the hero "Se mer" button, outlined buttons and the library's buttons all use 96px, which at a 44px height renders as a full pill. Cards use 16px. Illustrations echo the same softness: rounded, flat-shaded figures, houses and a piggy bank with no hard outlines.

## Components

- **button-primary** is the header CTA: green fill, white 16px label, 8px 16px padding, 44px height, 30px radius.
- **button-pill** is the in-page filled CTA (for example "Se mer"): green fill, 8px 24px padding, 44px height, 96px radius.
- **button-outline** is the secondary action ("Les mer om bankbytte", "Sjekk dine medlemsfordeler", the cookie dialog buttons): white fill, water-blue label and 2px outline in the same blue, 96px radius, 8px 24px padding, 44px height.
- **button-docs-primary** is measured from the component Storybook page: #084f91 fill, white label, 6px 16px padding, 40px height, 96px radius. It is slightly more compact than the site buttons.
- **nav** is a white header with navy text; **footer** also uses navy text on canvas in the generated tokens.
- **card** is white with ink text, a 16px radius and the translucent hairline border.

Links in body copy are underlined and blue. Icons in the service grid are two-tone illustrations rather than line icons.

## Design System Architecture

SpareBank 1 publishes its design system openly. The documentation site is [design.sparebank1.no](https://design.sparebank1.no), whose landing page (titled "Designsystemet — SpareBank 1 Designsystem") links to Kom i gang, Visuell identitet, Grunnleggende, Universell utforming, Om designsystemet, Bidra and Komponenter, plus the GitHub repository and an issue tracker. The code lives in [github.com/SpareBank1/designsystem](https://github.com/SpareBank1/designsystem), a monorepo called "Felles Front End" (FFE) whose README says it comprises the repository code, the Figma libraries and the documentation site, all run by one design-system team. Components are split into two npm packages each: a Less styling package and a `-react` package with the React implementation and tests. The packages directory lists core, buttons, cards, forms, grid, tables, tabs, tags, modals, messages, icons, webfonts and many more.

The `packages/ffe-core/tokens` directory holds token files named Primitive, Semantic (Light and Dark) and Context (Default and Accent). The [Colors documentation](https://github.com/SpareBank1/designsystem/blob/develop/packages/ffe-core/documentation/Colors.mdx) states that components use semantic names such as `--ffe-color-background-default` instead of hex codes, and that four modes are supported: Light, Light accent, Dark and Dark accent, with dark mode following the user's system setting. The older named palette (fjell #002776, vann #005aa4, skog #00754e, svart #020a0a, and others) is marked deprecated in `colors.less` in favor of the semantic colors, though the live homepage still resolves to those exact values. Spacing is an 8px base in `spacing.less`, and radii are published as CSS variables (4px, 8px and 16px).

Component examples are in a Storybook at [sparebank1.github.io/designsystem](https://sparebank1.github.io/designsystem/). The Primary Button story measured for this file shows the library button at a different blue fill than the marketing green, as described above. The repository also generates AI-context documentation for MCP servers.

## Do's and Don'ts

Do use green (#00754e) only for the single most important action in a view, and give the rest of the actions the outlined pill. Do keep headlines in the title typeface in navy (#002776) on white, and let links be water blue (#005aa4) and underlined. Do use flat illustration and real, warm photography of ordinary Norwegians instead of stock office imagery. Do write Norwegian in a conversational voice and use question headlines.

Don't use hard-cornered buttons: the smallest button radius on the site is 30px. Don't introduce a second saturated accent next to green. Don't use the deprecated palette variable names in new code, since the design system points to the semantic tokens. Don't add heavy drop shadows or gradients; the system is flat. Don't use the browser-default blue (#0000ee) for links: the measurement picked it up from unstyled anchors, and the shipped links are #005aa4.

## Responsive Behavior

The mobile measurement at a 390px viewport shows the display heading stepping down from 36px to 24px, with the line height going from 44px to 28px; body text stays at 16px on a 24px line. The design system ships a dedicated breakpoints Less file in its core package, and the live page exposes an xl breakpoint variable of 1280px, which matches the desktop capture width. The layout below the tablet size was not captured visually for this file, so no claim is made here about how the service grid or header reflow. What the system does guarantee in its tokens is the 44px button height on the site (40px in the component library) and full pill radius on buttons, which are the properties to preserve when adapting the layout to small screens.

## Iteration Guide

1. Start from canvas #ffffff, ink #020a0a and body 16px/24px in SpareBank1-regular with an Arial fallback.
2. Put headlines in the title typeface at 36px (24px on mobile) in fjell #002776.
3. Add exactly one green (#00754e) filled pill per screen at 44px height and 96px radius; make all other buttons outlined in vann #005aa4.
4. Use frost #d8e9f2 and sand #fdf8f5 for banded sections, and keep cards at 16px radius with the #020a0a33 hairline.
5. Choose illustration plus photograph pairs for sections, and keep every shadow subtle or absent.
6. For application UI, check the component Storybook: its filled button is #084f91 with a 40px height, so decide deliberately between the marketing and product variants.
