---
version: alpha
name: Prinsiri
category: "Thai Brands"
description: "Prinsiri (prinsiri.com) developer site: SMBAdvance Thai type at 40px headings and 23px light body, brand purple #6b3a6f with deeper #5a1d60 and an orange #ed6423 promotional accent, #58595b grey ink on a #e2ded6 canvas with white cards, 3px-radius outlined buttons and bright house photography."
colors:
  canvas: "#e2ded6"
  page-largest: "#ffffff"
  ink: "#58595b"
  primary: "#6b3a6f"
  accent-magenta: "#eb008b"
  surface-mist: "#f6f8f7"
  surface-warm-white: "#f6f7f5"
  ink-strong: "#333333"
  purple-alt: "#6e396f"
  purple-deep: "#5a1d60"
  accent-orange: "#ed6423"
typography:
  display:
    fontFamily: SMBAdvance, sans-serif
    fontSize: 40px
    fontWeight: 500
    lineHeight: 44px
  display-mobile:
    fontFamily: SMBAdvance, sans-serif
    fontSize: 32px
    fontWeight: 500
    lineHeight: 40px
  subheading:
    fontFamily: SMBAdvance, sans-serif
    fontSize: 50px
    fontWeight: 500
    lineHeight: 30px
  body:
    fontFamily: SMBAdvance, sans-serif
    fontSize: 23px
    fontWeight: 300
    lineHeight: 20px
  button-secondary:
    fontFamily: SMBAdvance, sans-serif
    fontSize: 24px
    fontWeight: 300
    lineHeight: 24px
rounded:
  xs: 3px
  sm: 5px
  pill: 9999px
spacing:
  s1: 5px
  s2: 8px
  s3: 10px
  s4: 15px
  s5: 16px
  s6: 18px
  s7: 20px
  s8: 30px
  s9: 50px
  s10: 64px
components:
  button-secondary:
    textColor: "{colors.ink-strong}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.xs}"
    padding: 8px 15px
    height: 44px
    borderColor: "{colors.ink-strong}"
---
## Overview

Prinsiri (ปริญสิริ) is a Thai residential developer whose home page, https://www.prinsiri.com/, is titled "โครงการบ้านจัดสรร บ้านเดี่ยว ทาวน์โฮม คอนโดมิเนียม | ปริญสิริ". The page states the brand line "สร้างบ้านด้วยใจ สร้างแบรนด์ด้วยความเชื่อ" (building homes with heart, building brands with belief) and describes its projects under an "Oxygen Community" concept. The capture opens on a full-width banner of white gabled townhouses with a silver car, an orange promotional sticker ("ทุบราคา จองด่วน!") and orange Thai text listing ten projects with prices from 2.09 to 5 million baht. A small purple logo tile with "PRIN SIRI" sits at the upper left beside a hamburger icon; social icons and the hotline 1753 sit at the upper right.

Below the banner is a centered heading "โครงการบ้าน ทาวน์โฮม คอนโดทั้งหมด" over three outlined tabs (ทาวน์โฮม, บ้านเดี่ยว, คอนโดมิเนียม), three project cards, an outlined "โครงการเพิ่มเติม" (more projects) button, and a "PRINSIRI ZONE" section with three tall poster images (ราชพฤกษ์, แจ้งวัฒนะ, เพชรเกษม). The page is 4268px tall at 1280px width. The tone is friendly and bright, with a sales-flyer sensibility: promotional stickers and bold prices, framed by an orderly white layout.

## Colors

Background areas: #ffffff (10021), #f6f8f7 (2625), #f6f7f5 (1044), #dddddd (1024), #846587 (77), #6b3a6f (6), #5a1d6099 (6). Text colors: #58595b (5065), #333333 (1246), #6b3a6f (485), #6e396f (289), #5a1d60 (206), #ed6423 (104), #ecd580 (88).

- canvas #e2ded6: the document background color (the --gainsboro variable); page-largest #ffffff is where most of the page area sits, behind cards and content.
- ink #58595b (--dim-grey-2): body text; ink-strong #333333 for headings and the outline button.
- primary #6b3a6f: the brand purple (--purple), used for price lines ("เริ่มต้น 2.19 ล้าน*"), the logo tile and the section title "PRINSIRI". The extractor's own primary guess, #eb008b, appears in 56 characters of text and is kept as accent-magenta.
- purple-deep #5a1d60 (--purple-2): the deepest purple used for the "PRINSIRI" word and dark headings; purple-alt #6e396f is a near twin of the primary.
- accent-orange #ed6423: the promotional text color on the hero banner; #ecd580 (a gold) appears in the "ราชพฤกษ์" zone titles and is not tokenized.
- surface-mist #f6f8f7 and surface-warm-white #f6f7f5: alternating light bands.

The stylesheet also declares #9f9581, #726958, #048a8b, #4e5d44, #8b0b0b and #00252a as root variables; these are not used in the measured areas and are not tokenized. A cookie script popup (cookiescript_injected) was hidden by the extractor and is not brand UI.

## Typography

SMBAdvance (a Thai face) is the main family, loaded at weights 300, 500 and 700. The page also loads Forum, Montserrat, Noto Sans Thai, PT Sans and Prompt, and a webflow-icons font, which shows the site is built on Webflow. Sizes by characters: 23px (3211), 29px (1651), 20px (1567), 30px (402), 24px (361), 48px (169), 35px (126).

- display: SMBAdvance 40px, weight 500, line-height 44px (the H1 "โครงการบ้าน ทาวน์โฮม คอนโดทั้งหมด"); display-mobile: 32px with line-height 40px at the mobile pass.
- subheading: 50px, weight 500, line-height 30px (as measured).
- body: 23px, weight 300, line-height 20px.
- button-secondary: 24px, weight 300, line-height 24px.

Large light Thai text with tight line-heights gives a clean look. SMBAdvance is loaded by the site; Noto Sans Thai and Prompt, also loaded, are the closest alternates in the site's own font stack.

## Layout

Sections are centered on a centered content column with three cards across in the capture, with the hero banner spanning full width and a dot pager (four dots) beneath it. Cards are white on the off-white band, each with a photograph (a purple "โครงการใหม่" tag on the new one, orange stickers on others), a bold project name, location line, two lines of description, a purple price line and a small "ดูรายละเอียด >" link. The Zone block shows three portrait posters with bold titles beneath. Spacings: 20px (44), 5px (38), 15px (8), 8px (6).

## Elevation & Depth

No box shadows were measured anywhere in the extraction. Project cards are distinguished by their white fill against the off-white band behind them, and the hero banner and posters get their depth from photography rather than from any shadow or border effect.

## Shapes

Radii measured: 3px (47 elements), 5px 5px 0px 0px (38 elements, top-rounded tabs and tags), 100% (4, dot pagers). Tokens: xs 3px, sm 5px, pill 9999px. The outlined buttons use 3px.

## Components

- button-secondary: transparent fill, #333333 text and 1px solid #333333 border, SMBAdvance 24px weight 300, 3px radius, padding 8px 15px, height 44px. The three category tabs and the "โครงการเพิ่มเติม" button share this outlined style.
- Project card: white card, photo, tag, title, location, short copy, purple price line, small text link.
- Tag: purple fill (#846587 measured as an area fill, 77 weight) with white text, top-rounded.
- Social icons in the header: Facebook, Instagram, LINE, YouTube and a 1753 hotline lockup.

## Design System Architecture

No public design system or brand guideline link was found. The site is built in Webflow (webflow-icons loaded) and exposes 17 root variables with named colors: --purple #6b3a6f, --purple-2 #5a1d60, --dim-grey-2 #58595b, --gainsboro #e2ded6, --white-smoke-3 #f6f7f5 and others. That naming of colors by hue is the de-facto system, with a purple pair as the brand core, warm greys for text and bands, and orange for promotion.

## Do's and Don'ts

- Do use the purple #6b3a6f for prices, tags and titles, and orange #ed6423 only for promotional emphasis.
- Do keep body copy in grey #58595b at 23px light.
- Do use outlined 3px-radius buttons for secondary actions.
- Do show a starting price on every project card.
- Don't use the magenta #eb008b as a main color; it is a minor accent.
- Don't present the cookie popup as a brand component.
- Don't add shadows; none were measured.

## Responsive Behavior

At the 390px mobile pass the H1 measured 32px, weight 500, line-height 40px (against 40px/44px on desktop) and body text 26px. Navigation and card reflow on mobile were not measured.

## Iteration Guide

1. Light bands (white, #f6f8f7) with #58595b text and purple #6b3a6f accents.
2. Orange #ed6423 for promo banners and stickers.
3. SMBAdvance, 40px headings and 23px light body.
4. Outlined 44px buttons with a 3px radius.
5. Cards with photo, tag, location, short copy and a purple price.
6. Run `node web/scripts/verify-designs.mjs --slug=prinsiri` after edits.

## Content and Imagery

Imagery is bright, daylight-rendered house and townhouse exteriors with landscaping and cars, and tall poster images for each Prinsiri Zone with gold quoted Thai place names ("ราชพฤกษ์", "แจ้งวัฒนะ", "เพชรเกษม") on top of road and lifestyle photographs. Promotion graphics use a red and orange starburst sticker with chunky Thai lettering. Copy mixes sales language ("ลดสูงสุด 700,000.-*", "เริ่มต้น 4.39 ล้าน*") with soft community phrasing such as "Oxygen Community". The footer, per the page copy, gives the address 244 (Phloen Nari Mall), Wachraphol Road, Bangkok 10230, and links to corporate information, careers, investor relations, news, awards and the privacy policy.

The page repeats a simple rhythm: a centered title, one line of explanatory copy, a row of cards or posters, and an outlined button that opens more. Section headings alternate between plain grey (the all-projects title) and purple with a bold weight (the PRINSIRI ZONE title), which is the only place the brand purple is used at heading scale. Promotional elements always appear on photographs and use orange or red sticker graphics, keeping the interface chrome calm.
