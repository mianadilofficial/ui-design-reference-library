---
version: alpha
name: GDH 559
category: "Thai Brands"
description: "GDH 559 (gdh559.co.th) is a Thai film company site set in Kanit (45px weight 800 uppercase news heading, 15px body) with GDH blue #009be4 links and 3px outlined square buttons, grey #868e96 body text, a #f2f2f2 article band, 25px pill tags and a #262b2f footer with orange #fd590f accents."
colors:
  canvas: "#ffffff"
  ink: "#333333"
  primary: "#009be4"
  on-primary: "#ffffff"
  surface-grey: "#f2f2f2"
  surface-footer: "#262b2f"
  ink-secondary: "#868e96"
  ink-faint: "#999999"
  ink-heading: "#212529"
  hairline: "#0000001a"
  accent-orange: "#fd590f"
typography:
  display:
    fontFamily: Kanit, serif
    fontSize: 45px
    fontWeight: 800
    lineHeight: 45px
    textTransform: uppercase
  display-mobile:
    fontFamily: Kanit, serif
    fontSize: 20.8px
    fontWeight: 400
    lineHeight: 31.2px
  subheading:
    fontFamily: Kanit, serif
    fontSize: 24px
    fontWeight: 400
    lineHeight: 36px
  body:
    fontFamily: Kanit
    fontSize: 15px
    fontWeight: 400
    lineHeight: 22.5px
  button:
    fontFamily: Kanit, serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 21px
    letterSpacing: 0.5px
    textTransform: uppercase
  nav:
    fontFamily: Kanit
    fontSize: 26.6667px
    fontWeight: 400
    lineHeight: 40px
  link:
    fontFamily: Kanit
    fontSize: 15.2px
    fontWeight: 300
    lineHeight: 22.8px
rounded:
  xs: 10px
  sm: 25px
  none: 0px
spacing:
  s1: 4.8px
  s2: 5px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 15px
  s7: 16px
  s8: 20px
  s9: 40px
  s10: 60px
components:
  button-primary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 8px 12px
    height: 43px
    borderColor: "{colors.primary}"
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 8px 12px
    height: 43px
    borderColor: "{colors.primary}"
  link:
    textColor: "{colors.primary}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    rounded: "{rounded.none}"
    boxShadow: rgba(0, 0, 0, 0.1) 0px 0px 20px 0px
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
    padding: 5px 0px
  footer:
    backgroundColor: "{colors.surface-footer}"
    textColor: "{colors.primary}"
    rounded: "{rounded.none}"
---

## Overview

GDH 559 (https://www.gdh559.co.th/, page title "GDH") is the site of the Thai film and entertainment company GDH 559 Co., Ltd., "Gross Domestic Happiness". The measured home page is 1280px wide and 1884px tall, in Thai with English accents. A 60px white header carries the round blue "gdh" logo and a Thai menu (หน้าแรก home, บทความ articles, ผลงาน works, ข่าว news, เกี่ยวกับเรา about us, สมัครงาน careers, ติดต่อ contact, plus a Thai-language flag selector). Under it a news carousel with the heading "LATEST GDH NEWS" and Thai subtitle "ข่าวล่าสุด" shows film and concert news tiles; below it a light-grey "บทความ" (articles) band presents three white article cards with a pill tag "เรื่องหนังๆ" (movie stuff) and an outlined button "บทความทั้งหมด" (all articles). A dark charcoal footer holds the logo, the company's registered office address, tax number, policy links and social icons.

The capture shows a black memorial notice with a portrait, over a dark scrim, covering the top of the page, with a "CLOSE" tab. It is a temporary overlay (and the extractor also hid a cookie bar, `gdhCookieAcceptBar`); neither is documented here as brand UI, and its scrim colour (#000000d9) is not tokenised. The queued URL is the company's own site, so the DESIGN.md is named after it.

## Colors

`{colors.primary}` is the GDH blue #009be4: link text, nav text, the 3px border and label of the outlined buttons, the footer's address text and the articles' tag pills. The generator had assigned `primary` to the button's white fill (#ffffff) and `on-primary` to the blue; the measured action colour is the blue, so it is the primary here and white is the button's fill (`{colors.canvas}`). Neutrals: `{colors.canvas}` (#ffffff, 3650 area) on header and cards, `{colors.surface-grey}` (#f2f2f2, 1537) as the articles band, `{colors.surface-footer}` (#262b2f, 439; a near-identical #262b30 measured 384) as the footer, and #192027 as a small darker footer strip.

Text: `{colors.ink-secondary}` (#868e96, 1100 characters) is the main body and excerpt colour, `{colors.ink}` (#333333, 427) is card titles, `{colors.ink-faint}` (#999999, 160) is captions, `{colors.ink-heading}` (#212529, 43) is the "LATEST GDH NEWS" heading, white (27) is text on dark tiles, and `{colors.accent-orange}` (#fd590f, 19) is the orange in the footer lettering "GROSS DOMESTIC HAPPINESS", the tax number and the copyright year. Border colours: #0000001a, #009be4 and #eeeeee. Bootstrap root variables (--primary #007bff, --success #28a745 and others) are framework defaults and not brand colours; the social icon fills (#3b5998, #55acee, #bb0000, #125688) are network brand colours.

## Typography

Kanit is the single family (2053 characters) with serif and Bootstrap sans fallbacks; loaded faces are Kanit 400, 500 and 700, with FontAwesome and slick icon fonts. Weights by characters: 400 (1975), 800 (30), 500 (26), 300 (22). Kanit is a Google Fonts Thai/Latin family, openly available. Scale: display 45px/45px weight 800 uppercase ("LATEST GDH NEWS"), subheading 24px/36px (card titles), 26.6667px/40px for menu links, body 15px/22.5px, link 15.2px/22.8px weight 300, button 14px/21px weight 500 uppercase with 0.5px tracking, and 16px, 18px, 19.2px, 12.8px and 30px sizes also appear. On mobile the card title drops to 20.8px/31.2px.

## Layout

Bootstrap 4 breakpoints are published as root variables: sm 576px, md 768px and lg 992px. The header is 60px high with a 20px shadow; three equal columns hold article cards; the footer is 343px tall with a logo column, a "การช่วยเหลือ" (help) column with the policy links นโยบายการสนับสนุน and นโยบายความเป็นส่วนตัว, and a "Follow us" column with round social icons. Paddings measured: 5px (97), 10px, 15px, 8px, 20px, 12px, 4.8px, 60px, 16px and 40px.

## Imagery and Voice

Imagery is promotional film material: posters with large Thai display lettering, still frames of young actors, a dog peeking from a cabinet, and a fantasy-styled portrait of a performer, each in a different graphic treatment because they come from different productions. The site does not impose a unified photographic style; it frames them with consistent white caption panels. Copy is Thai-first and conversational, with entertainment-news headlines in quotation marks (for example titles of films and series), short excerpts ending in ellipses, and a tag "เรื่องหนังๆ" categorising the story. English appears in the "LATEST GDH NEWS" heading, "Follow us", "CLOSE" and the company name. The tagline "Gross Domestic Happiness" is set in the footer logo lockup in blue and orange.

## Elevation & Depth

Only one box shadow was measured: `rgba(0, 0, 0, 0.1) 0px 0px 20px 0px` under the header. Article cards sit as white panels on the #f2f2f2 band and are separated by tone, not by shadow. A dark scrim overlay and memorial modal also appear but are transient.

## Shapes

The outlined buttons are square (0px radius) with 3px blue borders. Article tag pills and the social icons are rounded: 25px (8 elements). A speech-style tab uses `10px 0px 10px 10px`.

## Components

- Header: white, 60px, logo left, Thai menu in blue Kanit 400.
- Outlined button: white fill, 3px solid #009be4 border, blue 14px uppercase weight 500 text, 0.5px tracking, 8px 12px padding, 43px high, 140px wide ("ดูข่าวทั้งหมด" view all news, "บทความทั้งหมด").
- Article card: image on top, 24px title in #333333, grey excerpt in #868e96, a 25px-radius blue tag pill.
- Section heading: "บทความ" in large white lettering on the grey band.
- Footer: #262b2f, blue company name and address, orange tax ID, round social icons, copyright "© 2018 GDH 559 Co.,Ltd.".

## Design System Architecture

No public design system or brand guideline page was found in the pages measured. The site is built on Bootstrap 4 (root variables --primary #007bff, --breakpoint-*, --gray #868e96, --font-family-sans-serif) with Slick carousel and FontAwesome icon fonts; its own look is applied on top as Kanit typography, the #009be4 blue and the dark footer. The `--gray` variable (#868e96) is also the measured body text colour.

## Do's and Don'ts

- Do use Kanit 400 for Thai and Latin text and weight 800 uppercase for the big news heading.
- Do use #009be4 for links, nav and outlined buttons with 3px borders.
- Do keep body copy in #868e96 and titles in #333333.
- Do use the #f2f2f2 band to separate the article section from white sections.
- Don't use Bootstrap blue #007bff or its other default colours as brand colours.
- Don't document the memorial modal, the scrim or the cookie bar as part of the identity.

## Responsive Behavior

At 390px the header remains 60px with a 20px-blur shadow, the card title is 20.8px/31.2px, body 15px/22.5px, and the outlined button keeps 14px type with 8px 12px padding at 140px by 43px. Sizes recorded by characters on mobile: 16px (725), 15px (631), 18px (254), 20.8px (173), 15.2px (60), 12.8px (33), 14px (26) and 36px (16). Menu collapse and column stacking were not measured.

## Iteration Guide

1. Start with Kanit, white and #f2f2f2 surfaces, text in #868e96 and titles in #333333.
2. Use #009be4 for every interactive element; make buttons outlined 3px with uppercase 14px labels.
3. Close pages with a #262b2f footer holding orange (#fd590f) accents.
4. Round only tags and social icons (25px).
5. Treat overlays, hover states and dark mode as not measured.
