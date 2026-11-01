---
version: alpha
name: Gojek
category: "Design Systems"
description: "Gojek's corporate site — Gojek green action buttons (#00880d, 96px pill radius, 44px tall) on white and deep navy (#101820) sections, set in the Maison Neue family (Extended Bold 48px headlines, Demi 16px buttons, Maison Neue 18px body), with oversized 40-64px rounded cards in saturated green, pink and orange and soft green glow shadows."
colors:
  canvas: "#ffffff"
  page-largest: "#101820"
  ink: "#000000"
  primary: "#00880d"
  on-primary: "#ffffff"
  surface-navy: "#182430"
  hairline: "#d3d3d33d"
  card-bg: "#7ccc6c"
  brand-green: "#00aa13"
  green-hover: "#269a31"
  green-pressed: "#00680a"
  ink-soft: "#1c1d1d"
  ink-secondary: "#494a4a"
  ink-muted: "#727272"
  surface-grey: "#fafafa"
  green-tint: "#eaffea"
  danger: "#ea001f"
  warning: "#ffc41c"
  info: "#008bab"
typography:
  display:
    fontFamily: MaisonNeueExtended-Bold
    fontSize: 48px
    fontWeight: 800
    lineHeight: 64px
    letterSpacing: 0.8px
  display-mobile:
    fontFamily: MaisonNeueExtended-Bold
    fontSize: 26px
    fontWeight: 700
    lineHeight: 39px
  subheading:
    fontFamily: MaisonNeueExtended-ExtraBold
    fontSize: 28px
    fontWeight: 400
    lineHeight: 36px
  body:
    fontFamily: "\"Maison Neue\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Oxygen, Ubuntu, Cantarell, \"Fira Sans\", \"Droid Sans\", \"Helvetica Neue\", sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: MaisonNeue-Demi
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 24px
  sm: 32px
  md: 40px
  lg: 64px
  xl: 96px
  pill: 9999px
spacing:
  s1: 4px
  s2: 6px
  s3: 8px
  s4: 12px
  s5: 16px
  s6: 20px
  s7: 24px
  s8: 32px
  s9: 40px
  s10: 60px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xl}"
    padding: 0px 24px
    height: 44px
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.ink}"
    rounded: "{rounded.md}"
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgb(178, 229, 184) 0px 0px 32px 10px
  footer:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.canvas}"
    padding: 64px 0px
---

## Overview

The Gojek corporate homepage alternates between photographic, human-centred storytelling and a dark navy product-pitch band. The capture begins with a banner photograph of riders in green jackets and a white Gojek wordmark, then a dark navigation bar (Home, Partner with us, GoCorp, GoAds, Careers, Company, Products, Blog, Help, EN) and a full-bleed hero photograph. A translucent green panel in the hero holds a very large white headline "Bersama, Pasti Ada Jalan" ("Together, there is always a way"). Below it, a #101820 navy section carries the centred white statement "Gojek: Your solutions for removing life's daily frictions" and a small green "Explore Careers" pill. A white sheet with a large curved top edge rises over the navy section and holds a carousel of award statements with small flat illustrations of couriers and riders.

Further down, "Our scale" introduces three tall rounded cards in green, pink and orange, each with a 3D-style isometric phone illustration, a bold statistic ("3 millions driver-partners", "6,4 millions Merchants") and a small label; the cards glow with a soft tinted shadow of their own hue. "Join the ride" begins the recruitment section.

The personality is warm, optimistic and local: Indonesian and English copy side by side, real people on scooters, rounded forms everywhere and one recurring green. Gojek describes Maison Neue as chosen "to reflect the bold and playful personality of Gojek" (https://asphalt.gojek.io/pages/foundations.html), which matches what the capture shows.

## Colors

Gojek's own design-language site states the brand identifier is "Gojek green", with the latest iteration "#00AA13", and that the scheme sticks to six primary colours plus a neutral palette (https://asphalt.gojek.io/pages/foundations_colors.html). Those palette values are published as images on that page, so only the green hex is quoted here.

On the live homepage:

- **Primary #00880d** is the fill of every measured CTA ("Become a driver-partner", "Become an employee", "Become a merchant", "Scale with us", "View all products", "Explore Careers"). It is a darker, higher-contrast green than the logo green; the homepage stylesheet also exposes it as `--content-brand` and `--interactive-accent`. **Brand-green #00aa13** is the documented logo green and appears as a measured fill on the page. **green-hover #269a31** and **green-pressed #00680a** are the stylesheet's hover and active variants of the brand surface.
- **Canvas #ffffff** is the main light background; **page-largest #101820** (the single largest background area) and **surface-navy #182430** give the dark sections and the footer.
- **Ink #000000** is the dominant text colour on light areas, with **ink-soft #1c1d1d** (`--content-primary`), **ink-secondary #494a4a** and **ink-muted #727272** defined in the shipped variables for UI text.
- **Card-bg #7ccc6c** is the green stat card; the pink and orange sibling cards use their own fills and tinted glows (their exact fills were not promoted to tokens).
- **Hairline #d3d3d33d** is a 24%-opacity light grey border.
- **Support colours** from the stylesheet: danger #ea001f, warning #ffc41c, info #008bab, with a pale **green-tint #eaffea** for success and highlighted surfaces, and **surface-grey #fafafa** for secondary surfaces.

Asphalt's colour page also says the UI palette is organised into Light and Dark themes that follow the OS or an in-app switch, and into Green, Pink and a third sub-theme per parent theme, with roles named Fill, Border and Icon (https://asphalt.gojek.io/pages/foundations_colors.html).

## Typography

The typeface is Maison Neue, in the cuts the site loads. Asphalt says it chose Maison Neue and the Book, Demi and Bold weights, and no italics (https://asphalt.gojek.io/pages/foundations_typography.html). The live page loads Maison Neue 400, 600 and 700 plus the named faces MaisonNeue-Book, MaisonNeue-Demi, MaisonNeue-Bold, MaisonNeueExtended-Bold and MaisonNeueExtended-ExtraBold.

| Role | Family | Size / line | Weight | Tracking |
|---|---|---|---|---|
| display (section headline) | MaisonNeueExtended-Bold | 48px / 64px | 800 | 0.8px |
| display-mobile | MaisonNeueExtended-Bold | 26px / 39px | 700 | none |
| subheading (card title) | MaisonNeueExtended-ExtraBold | 28px / 36px | 400 | none |
| body | Maison Neue | 18px / 24px | 400 | none |
| button | MaisonNeue-Demi | 16px / 24px | 400 | none |

Extended widths are used for display and stat text, giving the headlines their wide, friendly stance; the standard width carries body copy and navigation. Measured text by character count is dominated by 18px and 16px, then 48px, 24px, 26px and 28px.

The stylesheet also ships a named type ramp: `--display-XS` through `--display-2XL` (Maison Neue Extended, weight 700, from 1.25rem to 2.5rem), `--heading-XS` to `--heading-2XL` (weight 600), `--text-regular-XS` to `--text-regular-2XL` (weight 500) and `--text-bold-XS` to `--text-bold-L` (weight 600), with 1.5 to 1.618 line heights.

The extractor picked the small white "Home" nav link as the h1; the hero headline over the photograph was not captured as a heading, so the 48px section headline (an h2) is used as the display role (see the role override in SOURCES.json).

**Font substitutes.** Maison Neue is a commercial typeface. For web fallback the site itself lists -apple-system, Segoe UI, Roboto and Helvetica Neue after it; a rounded geometric sans such as Poppins or DM Sans is the closest open stand-in for the Extended cuts.

## Layout

The page is full-bleed with centred, single-column storytelling sections. Section headings are centred at 48px (desktop) with a pill CTA directly beneath. Cards are arranged as an even three-up row with wide gutters, and the carousel row uses three equally spaced items with left and right round arrow buttons. The navy section's lower edge is covered by a white sheet with a very large curved top edge, creating a swooping transition. Whitespace is generous: spacing tokens measured on the page run 4, 6, 8, 12, 16, 20, 24, 32, 40 and 60px, and the footer has 64px of vertical padding. The stylesheet defines layout spacing as `--space-layout-XS` to `--space-layout-3XL` (0.5rem to 3.5rem), container spacing from 0.75rem to 2.5rem, and navigation spacing from 0.125rem to 1.5rem.

## Elevation & Depth

Elevation is expressed two ways. Asphalt describes elevation as shadow tokens "created when we have surfaces blocking the light source", with a light source perpendicular to the screen and only two tokens, a Low shadow and a High shadow (https://asphalt.gojek.io/pages/foundations_shadows.html). The homepage stylesheet defines `--shadow-low` (0 2px 20px at 8% black), `--shadow-mid` (0 4px 20px at 10%) and `--shadow-high` (0 16px 64px at 12%), plus emboss and deboss inner shadows. The three stat cards use a different treatment: a coloured halo, such as `rgb(178, 229, 184) 0px 0px 32px 10px` on the green card, which makes each card glow in its own hue instead of casting a grey drop shadow. The white sheet over navy and the translucent green hero panel provide layering through colour.

## Shapes

Shape language is round and soft. Pills (96px radius) for buttons and chips; 40px radius for large cards (the stat cards); 24px and 32px for medium containers; 64px is a measured radius value, consistent with the large curved edge of the white sheet. The stylesheet's own roundness tokens are `--roundness-action-control` and `--roundness-full` at 62rem, container radii of 1rem, 1.25rem and 1.5rem, menu 0.75rem, user-input-S 0.375rem and a `--roundness-sharp` of 0rem. Illustrations are glossy isometric 3D objects (phones, scooters, a food bag) and flat character vignettes with simple outlines; photography is cropped full-bleed with no frame.

## Components

**Primary button.** Fill #00880d, white label in MaisonNeue-Demi 16px, 44px tall, 24px horizontal padding, 96px radius (pill). Several identical instances appear across sections, always as a single main action per section, centred. The stylesheet defines a 2px action border width and a 2px solid focus outline, and hover and active greens (#269a31, #00680a).

**Navigation.** Dark bar, white 16px labels, active item underlined, dropdown chevrons for Partner with us, Company and EN.

**Stat card.** 40px radius, saturated fill (#7ccc6c for the green one), isometric illustration overhanging the top edge, a bold statistic in Maison Neue Extended and a small caption, with a coloured glow.

**Carousel.** Award statements in 16px regular text under flat illustrations, white circular arrow buttons and two-dot pagination with a green active dot.

**Footer.** #101820 background, white text, 64px vertical padding.

The Asphalt site lists an Alert component with a "coming soon" components section; no live component demos were available to measure (see Design System Architecture).

## Design System Architecture

Asphalt Aloha, at https://asphalt.gojek.io (which I opened and read), is "Gojek's own design language system". Its pages are Foundations (Colors, Typography, Motion, Spacing, Shadows), Principles (Consistency, Usability, Accessibility, Aesthetics) and Components (an index page whose entries repeat an Alert description; the home page labels components as "Coming soon"). Each foundation page offers "Design" content and an "Implementation (coming soon)" tab. Key documented decisions:

- Colour tokens switch between light and dark themes and three colour themes; roles are named Fill, Border and Icon.
- Typography: Maison Neue, weights Book, Demi and Bold; a scale based on a 12pt base size with a 1.3x factor, line heights rounded to a multiple of 4 to fit a 4px grid, and a hierarchy named Titles (Hero to Tiny), Body (Moderate, Small) and Caption.
- Spacing is a token scale shared by in-component and between-component space.
- Elevation uses two shadow tokens (Low and High).
- Principles state "Accessibility governs our design to ensure inclusivity".

The Asphalt pages are static documentation with images; because no live components are presented, I measured the components index page with the extractor and it returned only the documentation site's own chrome (a green 48px-radius "All Components" button, #00800d on white), not Gojek product components. Component values in this file therefore come from gojek.com itself.

On gojek.com the shipped stylesheet carries a semantic token layer as CSS custom properties: `--content-*`, `--interactive-*`, `--static-*`, `--overlay-*`, `--roundness-*`, `--space-*`, `--shadow-*` and the type ramp described above, sitting beside Tailwind utility variables (`--tw-*`) and Swiper's navigation variables. I am describing these as shipped variables; I did not confirm that they are generated from Asphalt.

## Do's and Don'ts

Do
- Use one green pill CTA per section, with white Maison Neue Demi text.
- Keep corners generous: 24 to 40px on cards, 96px on buttons.
- Pair navy sections with a white sheet of large radius to transition between them.
- Let illustrations and real photographs carry personality; keep copy short and bilingual where appropriate.
- Give each stat card a halo shadow in its own colour.

Don't
- Don't use the logo green (#00aa13) for text on white; use #00880d for contrast.
- Don't use italics; Asphalt's type system excludes them.
- Don't use sharp corners on actions; reserve 0rem for deliberate exceptions.
- Don't stack multiple filled CTAs in one section.
- Don't mix Extended and standard widths within one headline.

## Responsive Behavior

At 390px the headline role drops from 48px to 26px at line-height 39px, with MaisonNeueExtended-Bold weight 700. The desktop capture shows three award slides at once with arrows and dots; the narrow-screen carousel was not captured. The navigation is a full text bar at desktop width; the narrow-screen navigation pattern was not captured. Cards and spacing follow the rem-based ramps, so large radii and paddings scale with the root font size. Asphalt notes it chose a larger base font size to make small text legible on mobile (https://asphalt.gojek.io/pages/foundations_typography.html).

## Iteration Guide

1. Start with the colour core: canvas #ffffff, navy #101820, ink #000000, primary #00880d.
2. Set up Maison Neue: Extended Bold 48px/64px for section headlines, 18px/24px body.
3. Build the pill button: 44px tall, 96px radius, 24px side padding, Demi 16px.
4. Create the stat card: 40px radius, saturated fill, halo shadow with 32px blur and 10px spread in a tint of the fill.
5. Add the navy section with a white curved sheet overlapping its bottom.
6. Verify contrast: white on #00880d, and white on #101820.
7. Re-run `node web/scripts/verify-designs.mjs --slug=gojek` after changing tokens.
