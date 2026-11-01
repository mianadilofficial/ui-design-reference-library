---
version: alpha
name: Emporium
category: "Thai Brands"
description: "Design language of the Emporium Bangkok luxury shopping complex site: a white page with black Cormorant serif display capitals at 88.8889px, light-weight GTWalsheimPro text in warm grey #8c8c8c, a muted gold #b5a06b theme accent, black bands, and frosted white pill controls at 42px height with fully rounded corners."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#b5a06b"
  on-primary: "#000000"
  gold-theme: "#aa9b6d"
  ink-gray: "#8c8c8c"
  ink-translucent: "#ffffff99"
  pill-hover: "#ececec99"
  nav-bg: "#00000099"
typography:
  display:
    fontFamily: Cormorant, "Noto Sans Thai", sans-serif
    fontSize: 88.8889px
    fontWeight: 400
    lineHeight: 88.8889px
    textTransform: uppercase
  display-mobile:
    fontFamily: Cormorant, "Noto Sans Thai", sans-serif
    fontSize: 39.0651px
    fontWeight: 400
    lineHeight: 39.0651px
    textTransform: uppercase
  body:
    fontFamily: GTWalsheimPro, "Noto Sans Thai", sans-serif
    fontSize: 20px
    fontWeight: 300
    lineHeight: 30px
  button:
    fontFamily: GTWalsheimPro, "Noto Sans Thai", sans-serif
    fontSize: 14px
    fontWeight: 300
    lineHeight: 21px
  nav:
    fontFamily: GTWalsheimPro, "Noto Sans Thai", sans-serif
    fontSize: 16px
    fontWeight: 300
    lineHeight: 16px
rounded:
  xs: 5.6px
  sm: 6.4px
  md: 20px
  lg: 24px
  xl: 42px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 7px
  s5: 8px
  s6: 10px
  s7: 14px
  s8: 15px
  s9: 20px
  s10: 34px
components:
  header-pill:
    backgroundColor: "{colors.ink-translucent}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.xl}"
    padding: 7px 15px
    height: 42px
  header-pill-hover:
    backgroundColor: "{colors.pill-hover}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
---

## Overview

Emporium is a luxury shopping complex at 622 Sukhumvit Road in Bangkok. Its website (page title "Home - Emporium") states the positioning in a tagline reading "The Pinnacle of Sophistication: THE ULTIMATE LUXURY SHOPPING COMPLEX", and describes more than 1,000 global brands across floors B1 to 5F with zones such as Benjasiri Park, Emporium Suites and Maison de Style. Navigation lists What's On, Dining, Shopping, Department Store, Directory, Blog & Vlog, About Us and FAQ, and the site offers M Card and Platinum Card membership, gift vouchers, tourist services and more.

The design expresses luxury through restraint. A large grey hero area shows a calligraphic gold-and-pearl letter E; below, a white section sets the name EMPORIUM in a high-contrast serif at display size with a centred grey standfirst. Event posters (with their own loud advertising colours) sit in a horizontal carousel with captions and date ranges beneath, followed by another centred display headline, ICONIC LUXURY. White space is generous and text is light-weight and quiet. The only brand colour is a muted gold, which appears sparingly.

At the bottom of the capture a black cookie-consent panel with gold-bordered buttons overlays the page. Its buttons are consent controls and are not described as brand buttons; the gold they use matches the site's theme gold, which is the reason the gold appears in the tokens.

## Colors

- **Canvas #ffffff**: dominant page background; the second large area is black (#000000) in dark bands such as the footer.
- **Ink #000000**: headings and display text, the most-read colour.
- **Ink-gray #8c8c8c**: standfirsts, captions and dates; declared as the site's gray (--color-gray).
- **Primary #b5a06b**: the gold accent measured on borders and link text. The site's own variable --color-theme resolves to a very close gold, **#aa9b6d** (--color-gold), which is the theme colour for buttons, active links and hovers in its stylesheet.
- **Ink-translucent #ffffff99**: the frosted white (60% opacity) fill of the floating header pills, with **pill-hover #ececec99** as the hover state.
- **Nav-bg #00000099**: the header container is 60% black; over the pale hero it reads as a soft shadow.

The site also defines the colours #dadada (--color-gray-light) and #ececec (--color-gray-bright) as neutral steps. WordPress preset colours (vivid purple, luminous orange and so on) are present in the CSS from the CMS and are not part of the brand.

## Typography

Two families create the contrast. Cormorant, a high-contrast display serif, sets the giant uppercase headings at 88.8889px, weight 400, line height equal to size (88.8889px); on a phone it falls to 39.0651px. GTWalsheimPro, a geometric sans, handles everything else at weight 300: body and standfirst text at 20px with 30px line height; navigation at 16px with 16px line height; pill labels and links at 14px with 21px line height. Noto Sans Thai follows each stack for Thai glyphs, and Kanit was also loaded on the page.

Weights used by character count are 300 (by far the most), 400, 200, 700 and 500, so the whole page reads light and airy. Sizes by frequency are 14px, 20px, 16px, 12px, then 35.5556px and 88.8889px for display. Display lettering is uppercase; body copy is sentence case. The site's own CSS defines fluid heading sizes with clamp(): h1 clamp(60px, 6.9444444444vw, 100px), h2 clamp(36px, 3.3333333333vw, 48px) and h3 clamp(30px, 2.7777777778vw, 40px).

Font substitutes: GTWalsheimPro is a commercial typeface; use a geometric sans with a light weight (for example Poppins Light or Montserrat Light). Cormorant is open-source on Google Fonts.

## Layout

The header is 90px tall (--header-nav-height) and floats above the hero, with Menu and Directory pills at the left and Contact, language (TH) and search pills at the right. The hero is a full-width grey panel with an ornamental E. Below it the content is centred: a display heading, a three-line standfirst of about 650px width, and an edge-to-edge carousel whose cards are cropped at the viewport edges. Each card is a poster image, a centred title and a small grey date range.

The spacing tokens declared by the site are 6px (3xs), 20px (sm), 30px (md), 60px (xl) and 80px (2xl). Measured spacings are 2px, 4px, 6px, 7px, 8px, 10px, 14px, 15px, 20px and 34px. The container width declared for medium containers is 900px. Large vertical gaps between sections give the page its slow pace.

## Elevation & Depth

Elevation is almost non-existent: one shadow was measured, rgba(0, 0, 0, 0.2) 0px 0px 6px 0px, on a floating element. WordPress shadow presets (outlined and deep) exist in the CSS but are CMS defaults. The header relies on a translucent layer and frosted pills, and the cookie panel is a solid black box with a rounded corner. Depth in the page comes from the contrast between white sections and the black bands.

## Shapes

Radii include 50% (31 elements, the circular icon buttons such as the search pill), 20px (10 elements), 42px (6 elements, the text pills), 5.6px, 6.4px and 24px. The site's CSS defines the button radius as half the button height, which explains the capsule shape, while its base border-radius is 0px. Posters are square-cornered images.

## Components

- **Header pill**: frosted white at 60%, black 14px weight 300 text, 7px 15px padding, 42px tall, 42px radius; each carries a small icon (menu, directory, phone, flag, search). The circular search pill uses a 50% radius.
- **Navigation**: Menu opens the main list (Home, What's On, Dining, Shopping, Department Store and more), labels in 16px weight 300.
- **Display heading**: centred uppercase Cormorant with a grey standfirst beneath.
- **Poster carousel card**: image, centred 20px title, 14px grey date range.
- **Link**: 14px weight 300, black on white, hover and active colour is the theme gold.
- **Footer**: black band with white text at the bottom of the page.

The default button in the site's CSS is 48px tall (--button-height) with a gold background (the theme colour) and white text; smaller variants are 36px and 42px. This is declared in variables; no filled gold button was found among the elements measured on the homepage, so none is included as a measured token.

## Design System Architecture

No public design system or brand guideline for Emporium was found on the page I opened (https://www.emporium.co.th/), which describes the complex, brands and services. The de-facto system is a WordPress theme with a rich custom-property layer: --color-theme (resolves to --color-gold #aa9b6d), --color-black, --color-gray (#8c8c8c), --color-gray-light (#dadada), --color-gray-bright (#ececec), --font-body (GTWalsheimPro with Noto Sans Thai), a size scale (--font-size-3xs 8px through --font-size-xl 20px, with 12px, 14px, 16px and 18px between), --spacing-3xs to --spacing-2xl, a button system (--button-height 48px, -md 42px, -sm 36px, with --button-border-radius half the height), and CSS filter variables for recolouring SVG icons in gold, black, gray and white. Swiper and a gallery library supply the sliders.

## Do's and Don'ts

- Do set display headings in Cormorant capitals and everything else in light GTWalsheimPro.
- Do use gold (#b5a06b, theme #aa9b6d) as a rare accent, not as a fill for large areas.
- Do keep header controls as frosted capsules with a 42px radius.
- Do leave large vertical gaps between sections.
- Don't use weights heavier than 400 for text copy; the site is almost entirely weight 300.
- Don't use WordPress preset colours or the Swiper blue as brand colours.
- Don't document cookie-consent buttons as brand components.
- Don't add drop shadows beyond the faint 6px blur measured.

## Responsive Behavior

The extraction measured the display heading at 39.0651px on a 390px phone against 88.8889px on desktop, and the site's CSS uses clamp() for fluid heading sizes and vw-based scaling. The page container width of 900px and spacing tokens are declared in the CSS; other mobile layout changes were not measured and are not claimed here.

## Iteration Guide

1. Start with white canvas, Cormorant capitals for the single hero word and light GTWalsheimPro 20px/300 grey standfirst.
2. Add frosted 42px capsule controls to the header.
3. Introduce the gold accent for links and borders only.
4. Set poster carousels edge to edge, with centred titles and grey dates.
5. Keep sections separated by space and white or black fields, not by rules or shadows.
6. Check every number against web/data/extracted/emporium.json and the CSS variables listed above before changing it.
