---
version: alpha
name: Beartai
category: "Thai Brands"
description: "Beartai (BT, บีที แบไต๋), Thai tech and lifestyle media: midnight navy #050b1b canvas, electric cyan #14e7ff headings and outlined See All pills, white Contact pill, GraphikTH and Gotham type, 15px translucent cards and video-thumbnail-led layouts."
colors:
  canvas: "#050b1b"
  ink: "#ffffff"
  primary: "#14e7ff"
  on-contact-pill: "#1c1c1c"
  surface-footer: "#202020"
  ink-silver: "#b9b9b9"
  ink-charcoal: "#363636"
  accent-blue: "#0041ec"
  nav-navy-60: "#050b1b99"
  nav-gray: "#9e9e9e"
  text-input-border: "#dddedf"
  card-white-10: "#ffffff1a"
typography:
  display:
    fontFamily: GraphikTH
    fontSize: 20px
    fontWeight: 500
    lineHeight: 34px
    textTransform: uppercase
  display-mobile:
    fontFamily: GraphikTH
    fontSize: 24px
    fontWeight: 700
    lineHeight: 33.6px
  heading:
    fontFamily: GraphikTH
    fontSize: 30px
    fontWeight: 700
    lineHeight: 42px
  subheading:
    fontFamily: GraphikTH
    fontSize: 16px
    fontWeight: 700
    lineHeight: 22.4px
  body:
    fontFamily: GraphikTH
    fontSize: 18px
    fontWeight: 400
    lineHeight: 30.6px
  button:
    fontFamily: GraphikTH
    fontSize: 16px
    fontWeight: 400
    lineHeight: 27.2px
    letterSpacing: 0.5px
    textTransform: uppercase
  nav:
    fontFamily: thongterm
    fontSize: 16px
    fontWeight: 400
    lineHeight: 27.2px
  button-secondary:
    fontFamily: Gotham
    fontSize: 16px
    fontWeight: 600
    lineHeight: 27.2px
    letterSpacing: 0.5px
rounded:
  xs: 4px
  sm: 6px
  md: 10px
  lg: 15px
  xl: 18px
  2xl: 24px
  3xl: 25px
  4xl: 30px
  pill: 9999px
spacing:
  s1: 2px
  s2: 5px
  s3: 6px
  s4: 7px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 15px
  s9: 20px
  s10: 30px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-contact-pill}"
    typography: "{typography.button}"
    rounded: "{rounded.2xl}"
    padding: 5px 10px
    height: 37px
  button-secondary:
    backgroundColor: "{colors.on-contact-pill}"
    textColor: "{colors.primary}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.xl}"
    padding: 5px 10px
    height: 41px
    borderColor: "{colors.primary}"
  link:
    textColor: "{colors.ink-charcoal}"
    typography: "{typography.nav}"
  nav:
    backgroundColor: "{colors.nav-navy-60}"
    textColor: "{colors.nav-gray}"
  nav-link:
    textColor: "{colors.ink-charcoal}"
    typography: "{typography.nav}"
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.2xl}"
    padding: 0px 20px
    height: 42px
    borderColor: "{colors.text-input-border}"
  card:
    backgroundColor: "{colors.card-white-10}"
    textColor: "{colors.ink}"
    rounded: "{rounded.lg}"
    padding: 10px
  footer:
    backgroundColor: "{colors.surface-footer}"
    textColor: "{colors.ink}"
---

## Overview

Beartai (BT, "บีที แบไต๋") is a Thai technology and lifestyle media brand. The homepage title reads "BT beartai บีที แบไต๋ ข่าวไอที อีวี รีวิว เกม เทคเทรนด์ ไลฟ์สไตล์ และบันเทิง" (IT news, EV, reviews, games, tech trends, lifestyle and entertainment). The menu has Home, Watch (Playlist, Short & Reels), Read, Tech, Biz, Game, Life and Contact, and the page footer area lists sales and marketing contacts and a careers/internship contact. Content is split between video ("BT Recommend") and articles with author, timestamp and a "Read More" link, in English interface labels with Thai titles.

The capture is a dark, video-first media homepage. The page canvas is a midnight navy with a bright blue glow at the very top. A hero block pairs a large featured video player (at capture time a DNA File episode of the BT Originals series with a woman, a river and a temple skyline) with a right-hand scrolling playlist of video thumbnails, each with a title, view count, age and a small cyan "New" tag. A translucent blurred header strip with the white "bt" logo, a rounded "find" search field with a magnifier, nav links (the active HOME underlined in cyan, WATCH and READ in gray) and a white CONTACT pill overlays the page; in the capture it is rendered mid-hero because of the sticky behaviour. A wide red-and-black third-party banner for gamescom asia appears twice and is advertising, not Beartai branding. "BT Recommend" and "Articles" headings are in cyan, each with a hairline cyan rule and an outlined "See All" pill with an arrow. Video thumbnails are a horizontal row of rounded cards with play buttons. Articles are a large white card for the lead story and three compact rows with cyan titles, small gray excerpts, author avatars and "Read More" links.

Tone is energetic and informal, driven by thumbnails with large bold type and numbered or labelled series.

## Colors

The canvas is a deep navy `canvas` #050b1b (also declared in the stylesheet as --main-bg #050B1B). Text is white (`ink` #ffffff). The brand accent on this dark ground is electric cyan, `primary` #14e7ff, used for section headings, rules, article titles, "See All" labels and borders. Secondary colors are `accent-blue` #0041ec (the hero glow blue), `ink-silver` #b9b9b9, `nav-gray` #9e9e9e for inactive nav items, and `ink-charcoal` #363636. `surface-footer` #202020 is the footer background; `nav-navy-60` #050b1b99 is the translucent header; `card-white-10` #ffffff1a is the translucent card fill; the input border is #dddedf.

The white CONTACT pill uses a dark text color, `on-contact-pill` #1c1c1c. The root stylesheet also declares a range of theme and WordPress preset colors (for example --bricks-color-orange #ff9800 and --bricks-text-success #11b76b), which are builder defaults, not brand colors. The red of the gamescom banner belongs to an advertiser.

## Typography

The primary face is `GraphikTH` (loaded at 500 and 700), a Thai-capable Graphik; Gotham (400, 600, 700) and `thongterm` supply Latin and navigation text, and Inter is also loaded. Measured styles: display 20px at 500, uppercase with 34px line height; display-mobile 24px at 700 with 33.6px line height; heading 30px at 700 with 42px line height; subheading 16px at 700 with 22.4px line height; body 18px at 400 with 30.6px line height; button 16px at 400, uppercase, 0.5px tracking; navigation 16px in thongterm at 400; secondary button 16px in Gotham at 600 with 0.5px tracking. Gotham and Graphik are commercial; Inter (already loaded) is a close open substitute for Latin and Noto Sans Thai or Prompt for Thai, none of which are measured substitutes.

## Layout

The page is a full-width, dark, grid-based layout with roughly even outer margins: a two-part hero (large player plus playlist rail), a full-width ad slot, a horizontal thumbnail carousel with partial next card showing, and a two-column article section (one large lead card, three stacked rows). The measured spacing values are 2, 5, 6, 7, 8, 10, 12, 15, 20 and 30px. Cards use 10px padding. Section headings sit on a thin cyan rule across the container. The stylesheet comes from the Bricks WordPress builder.

## Elevation & Depth

Depth is expressed with translucency and layering rather than shadows: the header is a navy blurred strip at 60 percent opacity (#050b1b99), cards are white at 10 percent (#ffffff1a) over the dark canvas, and the hero has a blue glow at the top. The lead article card is solid white, providing the page's strongest surface contrast. The stylesheet defines WordPress shadow presets that are not part of the measured components.

## Shapes

Measured radii are 4, 6, 10, 15, 18, 24, 25, 30px and a full pill. Cards use 15px, the search input and the white CONTACT button use 24px, and the outlined See All button uses 18px; thumbnails and the hero player are visibly rounded in the same range. Full pills appear in small tags and avatars. Rounded forms are consistent across the page.

## Components

**Primary (Contact) button**: white fill, #1c1c1c uppercase 16px GraphikTH text with 0.5px tracking, 24px radius, 5px 10px padding, 37px tall.

**Secondary (See All) button**: #1c1c1c fill, cyan #14e7ff Gotham 16px 600 text and cyan border, 18px radius, 5px 10px padding, 41px tall, with a right arrow.

**Navigation**: translucent navy (#050b1b99) with gray #9e9e9e labels; active item is white with a cyan underline (observed).

**Text input** (search): white text, #dddedf border, 24px radius, 20px horizontal padding, 42px tall.

**Card**: translucent white (#ffffff1a), 15px radius, 10px padding, white text.

**Footer**: #202020 background with white text.

## Design System Architecture

No public design system, brand guideline or press kit was found on the pages opened (the homepage exposes no such link). The de-facto system is a WordPress site built with the Bricks builder: the root stylesheet exposes Bricks variables (--bricks-color-orange, --bricks-border-color #dddedf, --bricks-bg-light #f5f6f7), WordPress preset variables and theme variables such as --main-bg #050B1B and --white-05. Type is GraphikTH, Gotham and thongterm, with Font Awesome 6 and Ionicons icons. Source: https://www.beartai.com/ (homepage and stylesheet as measured by the extractor).

## Do's and Don'ts

Do build on the navy canvas with white text and cyan accents; use cyan for headings, rules and outlined See All pills. Do keep a white pill for the one contact action, and use rounded 15px translucent cards. Do lead with large video thumbnails and short bold titles.

Don't use the red advertising banners, the sticky-header mid-hero capture artifact, or builder default colors as brand elements. Don't fill primary buttons with cyan; the measured buttons are white-filled or dark-filled with cyan outline. Don't use light backgrounds except for the lead article card.

## Responsive Behavior

The extraction includes a mobile pass, which produced a 24px bold display-mobile style; the desktop display is 20px uppercase. Breakpoints and other mobile layout values are not measured.

## Iteration Guide

Use the frontmatter tokens only. Start with a #050b1b canvas, white text, cyan section headings with a cyan hairline, outlined 18px See All pills and 15px translucent cards. Titles in GraphikTH bold; navigation in thongterm 16px. Use the white 24px pill for the single main action. Measure any new component on the live site, cite it, then re-run the gate.

Token reference for iteration: colors are canvas #050b1b, ink #ffffff, primary #14e7ff, on-contact-pill #1c1c1c, surface-footer #202020, ink-silver #b9b9b9, ink-charcoal #363636, accent-blue #0041ec, nav-navy-60 #050b1b99, nav-gray #9e9e9e, text-input-border #dddedf, card-white-10 #ffffff1a. Radii are xs 4px, sm 6px, md 10px, lg 15px, xl 18px, 2xl 24px, 3xl 25px, 4xl 30px, pill 9999px. Spacing steps are s1 2px, s2 5px, s3 6px, s4 7px, s5 8px, s6 10px, s7 12px, s8 15px, s9 20px, s10 30px. Every value here is measured on the live site; anything not listed is not measured.
