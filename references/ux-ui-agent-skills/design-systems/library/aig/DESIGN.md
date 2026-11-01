---
version: alpha
name: AIG
category: "Banking & Insurance"
description: "AIG (aig.com) corporate insurance site: navy #001871 header and hero, #1352de blue links and hover fills, Futura PT headlines with Source Sans Pro body, square corners, one soft 0.16 card shadow."
colors:
  canvas: "#ffffff"
  ink: "#343741"
  primary: "#1352de"
  surface-2: "#001871"
  ink-5: "#80d2f2"
  ink-6: "#5b5c60"
typography:
  display:
    fontFamily: futura_pt_medium
    fontSize: 44px
    fontWeight: 400
    lineHeight: 56px
  heading:
    fontFamily: futura_pt_book
    fontSize: 24px
    fontWeight: 400
    lineHeight: 30px
  subheading:
    fontFamily: futura_pt_medium
    fontSize: 24px
    fontWeight: 400
    lineHeight: 30px
  body:
    fontFamily: aig_sourcesanspro_regular
    fontSize: 20px
    fontWeight: 400
    lineHeight: 30px
  button-secondary:
    fontFamily: aig_futura_medregular
    fontSize: 14px
    fontWeight: 400
    lineHeight: 14px
    textTransform: uppercase
rounded:
  none: 0px
spacing:
  s1: 3px
  s2: 13px
  s3: 14px
  s4: 15px
  s5: 16px
  s6: 17px
  s7: 18px
  s8: 21px
  s9: 24px
  s10: 25px
components:
  button-secondary:
    backgroundColor: "{colors.surface-2}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    padding: 16px 17px
    height: 48px
    borderColor: "{colors.canvas}"
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.display}"
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    padding: 40px 0px 32px
---

# AIG

## Overview
AIG (American International Group) is a global insurance organization. Its home page (title "AIG Insurance Home | AIG US") describes it as "a leading global insurance organization providing a wide range of property casualty insurance and other financial services" operating in more than 200 countries and jurisdictions. The measured page is corporate and confident: a deep navy header (#001871) with the white boxed AIG wordmark and a row of uppercase navigation (RISK SOLUTIONS, CLAIMS, CAREERS, ABOUT, INVESTORS, NEWS, CONTACT), search and globe icons and an outlined LOGIN button. A hero panel in the same navy carries a 44px white headline "AIG Deepens Long-Term Commitment to Salford City" beside a sports photograph and a square outlined button "Watch the video".

Below the hero the page alternates white and pale-blue bands: a light-blue strip with two news items (photo left, navy headline, blue "Watch the video" and "Learn more" links with arrows), a centered white "About AIG" paragraph, a pale-blue "Risk Solutions" panel with INDIVIDUALS and BUSINESSES tabs and a white card with an image and arrow-linked calls to action, then "AIG Performance & Initiatives" with a media block. Imagery is editorial photography of people (sports, executives) and architecture. Copy voice is confident, polished and client-focused. The page measured 5,236px tall at 1280px.

## Colors
- **Canvas** `{colors.canvas}` #ffffff for the content bands.
- **Navy** `{colors.surface-2}` #001871: header, hero, headings and secondary button fill (the h2 text color is #001871).
- **Primary blue** `{colors.primary}` #1352de: link text and the hover fill for buttons. Measured on hover: LOGIN changes from #001871 to #1352de and "Watch the video" fills #1352de.
- **Ink** `{colors.ink}` #343741 for body text (1,300 characters) and as the footer background; `{colors.ink-6}` #5b5c60 is the muted text.
- **Sky** `{colors.ink-5}` #80d2f2 appears in a small number of text runs (12 characters).
- White text is the most frequent text color (1,962 characters), set on navy.
- The light-blue band is visible in the capture; its exact value was not recorded as a token.

## Typography
Futura PT (custom loaded faces: futura_pt_light, futura_pt_book, futura_pt_medium, futura_pt_bold, plus aig_futuraregular and aig_futura_medregular) for headings, and Source Sans Pro (`source sans pro`, aig_sourcesanspro_regular) for body. A "custom-icons" font supplies icons.
- `display` futura_pt_medium 44px / 400 / 56px: the hero h1.
- `heading` futura_pt_book 24px / 400 / 30px: card headings in navy.
- `subheading` futura_pt_medium 24px / 400 / 30px: h3 "Risk Managers".
- `body` aig_sourcesanspro_regular 20px / 400 / 30px.
- `button-secondary` aig_futura_medregular 14px / 400 / 14px, uppercase: navigation and button labels.
The body element itself measured Source Sans Pro 16px with a 22.8571px line-height. Futura PT is a licensed Adobe/Paratype family; the page loads it from its own font files.

### Imagery and voice
Photography is editorial and human: a women's football team seated on a pitch under floodlights, two executives shaking hands at a golf event, a trophy winner smiling, a glass-fronted office building, and a broadcast interview. Photos are cropped square or wide with no rounded corners, and sit beside text rather than behind it, except the hero where the photograph fades into the navy panel. Headlines are short title-case statements ("About AIG", "Risk Solutions", "AIG Performance & Initiatives") set centered in navy Futura. Link microcopy is action-first ("Watch the video", "Learn more", "Discover product & services", "Log In now", "Multinational Log In") and each link ends in a right-pointing arrow icon drawn by the custom icon font. The login area is split by audience, with Individuals, Businesses, Brokers & Agents and Risk Managers each given their own set of links, which gives the page the density of a portal rather than a brochure.

The navigation items include a plus sign after each top-level label in the page text (RISK SOLUTIONS +, CLAIMS +, CAREERS +, ABOUT +). What the plus sign opens was not measured. The hover states recorded on the page are all color fills with no movement: the search button goes from navy to transparent, LOGIN from navy to blue, the outlined hero button from transparent to blue.

## Layout
Centered content column on 1280px with wide white gutters. Hero text sits in the left half over navy with the photograph on the right. News cards use a two-column row with a small left thumbnail. Risk Solutions is a narrow centered card with a two-column list below the image. Measured spacing steps are 3, 13, 14, 15, 16, 17, 18, 21, 24 and 25px. Footer padding is 40px 0px 32px on a #343741 background.

The text colors measured by frequency show the page is mostly white-on-navy and dark-gray-on-white: white 1,962 characters, #343741 1,300, navy #001871 593, blue #1352de 282. White text sits on the navy header and hero, and dark gray text sits on the white and pale-blue bands.

## Elevation & Depth
Almost flat. One shadow was measured: `rgba(0, 0, 0, 0.16) 0px 2px 6px 0px`, on the white Risk Solutions card over the pale-blue band. Contrast between navy, white and pale-blue bands creates the layering.

## Shapes
No border radius was measured on any element (`rounded` is empty); buttons, cards and images are square-cornered, including the outlined LOGIN and "Watch the video" buttons.

## Components
- **button-secondary** (LOGIN): navy #001871 fill, white text, white 1px border, futura 14px uppercase, padding 16px 17px, height 48px, radius 0. Hover fills #1352de.
- **outlined hero button** "Watch the video": transparent with white border, height 52px; hover fills #1352de with a #1352de border.
- **search button**: navy fill, white icon, height 61px; hover becomes transparent.
- **link**: blue #1352de text with an arrow glyph ("Learn more", "Discover product & services").
- **tabs**: INDIVIDUALS and BUSINESSES in uppercase, the active tab blue with an underline.
- **footer**: #343741 background, white text.

## Design System Architecture
No public design system, brand guideline or press kit is linked from the home page; the only related item is the newsroom's media contacts page. The root CSS variable list was empty in the measurement, so the system is expressed through class-based CSS and the custom font names (`aig_futuraregular`, `aig_futura_medregular`, `aig_sourcesanspro_regular`) that suggest an AIG-licensed font build. A custom icon font covers the arrows, search and globe.

Sources opened: https://www.aig.com/home (home page, its text and shipped CSS). Because no variables are published, a faithful rebuild must copy values from the measured tokens above: #001871, #1352de, #343741, #5b5c60 and #80d2f2 for color, and the specific font names for type.

## Do's and Don'ts
- Do use navy #001871 for structure and #1352de for interactive states.
- Do keep corners square (radius 0).
- Do set headlines in Futura PT and body in Source Sans Pro.
- Do use uppercase 14px Futura for buttons and navigation.
- Do alternate white and pale-blue bands.
- Don't add rounded corners or heavy shadows.
- Don't set text in generic sans-serif; use the licensed faces.

## Responsive Behavior
The mobile pass at 390px recorded the h1 at the same values as desktop (futura_pt_medium 44px / 56px), so the h1 size change on mobile is not evidenced; no mobile CTA was detected. Breakpoints, column collapse and menu behavior were not measured.

## Iteration Guide
1. Navy #001871 header and hero, white content, #1352de links.
2. Futura PT medium 44px for hero, book 24px for card titles, Source Sans Pro 20px for body.
3. Square buttons 48px high, uppercase 14px.
4. One soft card shadow: `rgba(0, 0, 0, 0.16) 0px 2px 6px 0px`.
5. Re-run `node web/scripts/extract-tokens.mjs --batch=web/data/batches/phase2.json --only=aig --force --no-motion`, then `node web/scripts/verify-designs.mjs --slug=aig`.
