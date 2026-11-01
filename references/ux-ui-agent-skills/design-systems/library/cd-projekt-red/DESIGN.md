---
version: alpha
name: CD PROJEKT RED
category: "Gaming"
description: "CD PROJEKT RED (cdprojektred.com/en): near-black #110b06 canvas, cream #f5eae8 text and CD PROJEKT red #f40024 header and headlines, Proxima Nova extra-condensed 800 uppercase at 80px, 99px pill buttons with 2px red outlines, no shadows."
colors:
  canvas: "#110b06"
  ink: "#f5eae8"
  primary: "#f40024"
  on-primary: "#f5eae8"
  surface: "#231e1a"
  on-red: "#ffffff"
  red-heading: "#ed050e"
  ink-charcoal: "#303030"
typography:
  display:
    fontFamily: proxima-nova-extra-condensed, sans-serif
    fontSize: 80px
    fontWeight: 800
    lineHeight: 80px
    textTransform: uppercase
  display-mobile:
    fontFamily: proxima-nova-extra-condensed, sans-serif
    fontSize: 40px
    fontWeight: 800
    lineHeight: 40px
    textTransform: uppercase
  heading:
    fontFamily: proxima-nova-extra-condensed, sans-serif
    fontSize: 84px
    fontWeight: 700
    lineHeight: 84px
    textTransform: uppercase
  heading-mobile:
    fontFamily: proxima-nova-extra-condensed, sans-serif
    fontSize: 48px
    fontWeight: 700
    lineHeight: 48px
    textTransform: uppercase
  footer-heading:
    fontFamily: proxima-nova-extra-condensed, sans-serif
    fontSize: 45px
    fontWeight: 800
    lineHeight: 67.5px
    textTransform: uppercase
  body:
    fontFamily: "\"Proxima Nova\", sans-serif"
    fontSize: 15px
    fontWeight: 400
    lineHeight: 25px
  body-mobile:
    fontFamily: "\"Proxima Nova\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 25px
  button:
    fontFamily: proxima-nova-extra-condensed, sans-serif
    fontSize: 17px
    fontWeight: 800
    lineHeight: 25.5px
    textTransform: uppercase
  button-secondary:
    fontFamily: proxima-nova-condensed, sans-serif
    fontSize: 17px
    fontWeight: 800
    lineHeight: 25.5px
    textTransform: uppercase
rounded:
  xs: 6px
  sm: 28px
  md: 99px
  lg: 100px
spacing:
  s1: 4px
  s2: 5px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 14px
  s7: 16px
  s8: 20px
  s9: 25px
  s10: 30px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    height: 50px
  button-outline:
    textColor: "{colors.on-red}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.md}"
    height: 50px
    borderColor: "{colors.primary}"
  nav:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-red}"
    padding: 20px
    height: 99px
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
  jobs-tab:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-red}"
    typography: "{typography.button}"
    rounded: "100px 0px 0px 100px"
    padding: 16px 16px 16px 25px
    height: 67px
  footer:
    textColor: "{colors.primary}"
    typography: "{typography.footer-heading}"
---

## Overview

The CD PROJEKT RED site (https://www.cdprojektred.com/en, title "CD PROJEKT RED | Award-Winning Creator of Story-Driven RPGs", language en) presents the studio as a company and employer rather than a game storefront. The measured page is 1280px wide and 4067px tall with 317 visible elements. In the capture a solid red header band (`#f40024`, 99px tall) carries the logo at the left, four black condensed menu items (About Us, Our Games, For Investors, Join Us), a row of eight round social icons and a "PL / ENG" language switch at the right.

Below it the page turns near-black (`#110b06`). A red bird emblem sits above a centered red headline in three lines: "PASSIONATE / CREATORS OF STORY-DRIVEN / ROLE-PLAYING GAMES", followed by a round red button with a down chevron. A red "JOBS" tab with a magnifier icon is attached to the right edge. The next section is a two-card photographic row: "MEET US" (buttons Our Teams, Our Games) and "JOIN US" (Perks & Benefits, Open Positions), where the section word is set as large outlined lettering over a darkened team photograph and two pill buttons with red outlines sit at the bottom of each photo. Under each card a red condensed title ("WE BREAK RULES / WE MAKE RULES", "ROOM TO CREATE / ROOM TO GROW") sits beside a short cream paragraph.

Next comes the "BEYOND THE GAME BLOG" section: an 84px red heading with a one-line cream subtitle ("Read all about our culture, how we create games, what we play, and everything we do at CD PROJEKT RED."), a featured podcast post (a small outlined pill "ANSWERED PODCAST", a white condensed headline, a short description and the date "October 1, 2026") and a row of image cards. The footer lists locations (Warsaw, ul. Jagiellońska 74, 03-301 Warszawa) under a red "OUR LOCATIONS" heading.

The voice is proud and direct ("We break rules. We make rules.", "Room to create. Room to grow."). The art direction is high contrast: red and cream on near-black, uppercase condensed type, real photography of the team and game art, and rounded pill controls with thin red outlines.

## Colors

The site declares four brand colors: `--color-black: #110b06`, `--color-white: #f5eae8` (a warm off-white), `--color-red: #f40024` and `--color-darkgray: #231d19`. Measured text colors by character count are `#f5eae8` (2042), `#ffffff` (289), `#110b06` (155), `#f40024` (125), `#ed050e` (19) and `#303030` (14). Measured backgrounds by area are `#00000066` (1471), `#231e1a` (953), `#f40024` (502) and `#00000099` (258).

- **Canvas `#110b06`** is the page and body background. The body element reports it as its background color.
- **Ink `#f5eae8`** is the main text color on the dark canvas and the text color of the red "Visit Our Press Center" button.
- **Primary `#f40024`** fills the header, the red button and the Jobs tab, colors the hero headline and footer headings and outlines the pill buttons (2px border, 9 occurrences of the border color).
- **Surface `#231e1a`** is the measured dark-gray panel color (declared `--color-darkgray` is `#231d19`).
- **On red `#ffffff`** is the header text color and the text color of the outlined pill buttons. **Red heading `#ed050e`** colors the 84px "BEYOND THE GAME BLOG" heading. **Charcoal `#303030`** measures on 14 characters.
- **Hover** on the header menu items: text moves from `#110b06` to `#f5eae8`.

Translucent black layers (`#00000066`, `#00000099`) are measured as large background areas over photographs and are not tokenised. The root also holds Bootstrap defaults (`--bs-primary: #0d6efd`, `--bs-body-color: #212529`, and others) and a Swiper theme color (`--swiper-theme-color: #007aff`); the one link measured with `#0a58ca` is Bootstrap's default link blue. None of these is a CD PROJEKT RED color.

## Typography

Three Proxima Nova cuts carry the page: `proxima-nova-extra-condensed` (842 characters, weights 500, 700 and 800 loaded), `proxima-nova-condensed` (232 characters; 400 and 800 loaded) and `Proxima Nova` (1584 characters; 400 loaded, with Light, Medium, Bold, Extrabold, Black and italic faces declared in the CSS corpus). Condensed faces handle headings, buttons and navigation, always uppercase. The regular width handles paragraphs.

- **Display (hero):** extra-condensed 800, 80px on 80px, uppercase, red. At 390px: 40px on 40px.
- **Heading ("BEYOND THE GAME BLOG"):** extra-condensed 700, 84px on 84px, uppercase, `#ed050e`. At 390px: 48px on 48px.
- **Footer heading:** extra-condensed 800, 45px on 67.5px, uppercase, red.
- **Body:** Proxima Nova 400, 15px on 25px, cream. At 390px: 16px on 25px.
- **Button and nav:** extra-condensed 800, 17px on 25.5px, uppercase (nav line-height 17px).
- **Secondary button:** condensed 800, 17px on 25.5px, uppercase.

Measured sizes by character count: 17px (1080), 15px (600), 16px (184), 24px (168), 28px (165), 14px (136), 48px (106), 35px (53), 80px (52), 25px (34), 45px (20), 84px (19). Weights: 300 (872), 400 (790), 800 (438), 700 (409), 600 (91), 500 (58). No letter-spacing is measured on any size. Hierarchy comes from the width of the face, uppercase, weight and color rather than from tracking.

Font substitutes: the declared fallbacks are `sans-serif` for every Proxima Nova stack; the extra-condensed headline look needs a condensed grotesque.

## Layout

The page is a centered, full-bleed composition: a 99px header band, a hero with a centered emblem and headline, a two-column card row, a centered section title, and a featured post beside a three-up card row. The hero headline measures 1256px wide and 260px tall (three lines of 80px). The header has padding 20px and spans 1280px. Body paragraphs measure 297px wide at desktop (two narrow columns, each beside a red title).

Measured gaps are 10px (8 occurrences), 8px (4) and 50px (2); measured paddings are 12px (33), 16px (6), 20px (5), 5px (5), 4px (5), 40px (3), 10px (2), 25px, 70px, 30px, 14px and 50px (1 each). The spacing tokens list 4px to 30px. Section titles are large uppercase lines, and the measured gaps range from 8px to 50px.

The Jobs tab sits at the right edge in the capture, 159px wide and 67px tall, with a radius only on its left side. Its page-text label is "CHECK OPEN POSITIONS" (the label is rendered as a "JOBS" tab with an icon in the capture).

## Elevation & Depth

The page is flat. No box shadows were measured on visible elements and the CSS corpus lists `none` and Bootstrap's input focus rings (`0 0 0 .25rem rgba(13,110,253,.25)`, a Bootstrap default, not a brand style). Depth comes from layering: red header over a black canvas, photographs under translucent black overlays (`#00000066` and `#00000099` backgrounds), outlined lettering over photographs, and the red emblem and chevron over black.

The featured post card carries its own red slash graphic, a dark gradient and a logo at the bottom right of the artwork; those are part of the image.

## Shapes

Shapes are pills and rectangles. Measured radii: 99px (5 occurrences), 100px (5), 6px (4), `100px 0px 0px 100px` (1, the Jobs tab) and 28px (1). Primary and outline buttons are 99px pills 225px wide and 50px tall; the Jobs tab is a half-pill; a 6px radius is measured 4 times and the image cards in the capture show small corners; the social icons and the chevron button are circles.

Outlines are thin and red: the secondary buttons carry `2px solid #f40024`. The large "MEET US" and "JOIN US" words are outlined letters (stroke only) rather than filled type. The phoenix emblem is a red logo glyph.

## Components

**Primary button ("VISIT OUR PRESS CENTER").** `#f40024` fill, `#f5eae8` text, extra-condensed 800 17px uppercase, 99px radius, 225px by 50px.

**Outline button ("OUR TEAMS", "OUR GAMES", "PERKS & BENEFITS", "OPEN POSITIONS").** Transparent fill, `#ffffff` text in condensed 800 17px uppercase, `2px solid #f40024` border, 99px radius, 225px by 50px.

**Header.** `#f40024`, 99px tall, 1280px wide, padding 20px; menu links are uppercase 17px/800 black (`#110b06`) text that turns `#f5eae8` on hover; the language switch reads "PL / ENG"; eight circular social icons.

**Jobs tab.** `#f40024` fill, white 17px/800 uppercase text, radius `100px 0px 0px 100px`, padding 16px 16px 16px 25px, 159px by 67px, at the right edge in the capture.

**Image cards.** Photograph with a dark overlay, small corners (a 6px radius is measured 4 times), an outlined section word and pills at the bottom.

**Blog post.** A small outlined pill label ("ANSWERED PODCAST"), a white condensed headline in uppercase, a short cream description and a date in small cream text.

**Footer.** 1021px tall; red 45px/800 uppercase headings ("OUR LOCATIONS") above cream address text.

## Design System Architecture

No public design system or brand guidelines are published. The home page (https://www.cdprojektred.com/en) links to a Press Center (https://press.cdprojektred.com) but that page offers no brand guidelines, logo usage rules, color or typeface specifications; its media section lists "Logos (14)" without a document. The site's own CSS is the only source.

The system is Bootstrap 5 underneath (`--bs-*` variables, `--bs-body-font-size: 1rem`, `--bs-body-bg: #fff`, gray scale `--bs-gray-100` to `--bs-gray-900`) with a Swiper carousel (`--swiper-navigation-size: 44px`, `--swiper-pagination-bullet-horizontal-gap: 8px`) and four brand variables on top: `--color-black`, `--color-white`, `--color-red`, `--color-darkgray`. The measured page background, text colors and buttons are the four brand colors, not values from the Bootstrap palette. Font-family names are `proxima-nova-extra-condensed`, `proxima-nova-condensed` and `proxima-nova`, with font-face names such as `Proxima Nova Extrabold` in the CSS corpus.

## Do's and Don'ts

**Do**
- Use `#110b06` as the page canvas, `#f5eae8` for text and `#f40024` for the header, headlines, buttons and outlines.
- Set headings, buttons and navigation in uppercase condensed Proxima Nova at weight 700 to 800; set paragraphs in regular-width Proxima Nova 400 at 15px/25px.
- Make buttons 99px pills, 50px tall, with a filled red or a `2px solid #f40024` outline.
- Pair photography with dark overlays and outlined lettering.
- Keep copy short and declarative ("Room to create. Room to grow.").

**Don't**
- Don't use Bootstrap's default blue (`#0d6efd`, `#0a58ca`) or its gray scale as brand colors.
- Don't add drop shadows; none were measured on visible elements.
- Don't set headings in mixed case or in the regular-width face.
- Don't tokenize the translucent black image overlays as page colors.

## Responsive Behavior

One mobile pass was recorded at 390px. Measured at 390px: the hero headline is 40px on 40px (80px at desktop) and 366px wide and 180px tall; the h2 "BEYOND THE GAME BLOG" is 48px on 48px (84px at desktop) and 326px wide; body copy is 16px on 25px (15px at desktop) in a 346px-wide column 150px tall; the "VISIT OUR PRESS CENTER" button keeps its 225px by 50px box with the label at 14px on 21px (17px on 25.5px at desktop); the header is 147px tall (99px at desktop) and its recorded text is "CHECK / OPEN POSITIONS / PL / ENG", which omits the About Us, Our Games, For Investors and Join Us items that the desktop header lists.

Measured sizes by character count at 390px: 17px (745), 16px (459), 14px (390), 28px (237), 22px (168), 15px (122), 35px (53), 40px (52). Breakpoint widths, the layout of the card rows and how the removed menu items are reached at 390px were not measured.

## Iteration Guide

1. Start with canvas `#110b06`, ink `#f5eae8`, primary `#f40024`; use `#231e1a` for dark panels.
2. Set headings in extra-condensed Proxima Nova 800 uppercase (80px/80px hero, 40px/40px on mobile) and body in Proxima Nova 400 15px/25px.
3. Build the header as a 99px red band with black uppercase menu items that turn cream on hover, round social icons and a PL / ENG switch.
4. Build buttons as 99px pills 50px tall: filled `#f40024` with cream text, or transparent with a `2px solid #f40024` border and white text.
5. Use photographic cards with dark overlays, small corners, outlined section words and pill buttons at the bottom.
6. Keep everything flat: no shadows, no gradients except the dark photo overlays, and no Bootstrap blue.
