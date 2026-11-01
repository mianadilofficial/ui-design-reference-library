---
version: alpha
name: Voice TV
category: "Thai Brands"
description: 'Voice TV (voicetv.co.th): Thai news portal in Dindan Mai type, a white 94px header with uppercase 16px/700 links, orange #f66604 tag and red #dd2027 LIVE outline, three-column story cards on #f4f4f4 gray with #eeeeee and #333333 panels, square #e6e6e6 button, tiny 4px radii.'
colors:
  canvas: '#f4f4f4'
  page-body: '#ffffff'
  ink: '#000000'
  primary: '#e6e6e6'
  on-primary: '#000000'
  surface-2: '#eeeeee'
  surface-3: '#333333'
  ink-3: '#222222'
  ink-4: '#aaaaaa'
  ink-5: '#888888'
  ink-6: '#444444'
  hairline: '#dbdbdb'
  nav-link-text: '#01778b'
  accent-orange: '#f66604'
  live-red: '#dd2027'
typography:
  display:
    fontFamily: '"Dindan Mai"'
    fontSize: 30px
    fontWeight: 600
    lineHeight: 39px
  display-mobile:
    fontFamily: '"Dindan Mai"'
    fontSize: 20px
    fontWeight: 700
    lineHeight: 30px
  subheading:
    fontFamily: '"Dindan Mai"'
    fontSize: 14px
    fontWeight: 700
    lineHeight: 21px
  body:
    fontFamily: '"Dindan Mai"'
    fontSize: 10px
    fontWeight: 400
    lineHeight: 15px
    textTransform: uppercase
  button:
    fontFamily: '"Dindan Mai"'
    fontSize: 18px
    fontWeight: 700
    lineHeight: 27px
  nav:
    fontFamily: '"Dindan Mai"'
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
rounded:
  xs: 4px
  sm: 5px
  md: 10px
  lg: 12px
  none: 0px
  pill: 9999px
spacing:
  s1: 2px
  s2: 5px
  s3: 9px
  s4: 10px
  s5: 12px
  s6: 15px
  s7: 20px
  s8: 23px
  s9: 24px
  s10: 25px
components:
  button-primary:
    backgroundColor: '{colors.primary}'
    textColor: '{colors.ink}'
    typography: '{typography.button}'
    rounded: '{rounded.none}'
    padding: 12px 25px
    height: 51px
  link:
    textColor: '{colors.ink-5}'
    typography: '{typography.subheading}'
    rounded: '{rounded.none}'
  nav:
    backgroundColor: '{colors.page-body}'
    textColor: '{colors.ink}'
    rounded: '{rounded.none}'
    padding: 23px 12px
    boxShadow: rgba(0, 0, 0, 0.05) 0px 4px 20px 0px
  nav-link:
    textColor: '{colors.nav-link-text}'
    typography: '{typography.nav}'
    rounded: '{rounded.xs}'
    padding: 0px 15px
---

# Voice TV

## Overview
Voice TV (`https://voicetv.co.th`, measured at `https://voicetv.co.th/`, title "Voice TV") is the Thai news and television brand whose web portal calls itself "VOICE online" in the header logo. The extractor found 609 visible elements on a 1280px-wide, 7088px-tall page. The home page is a dense news portal in Thai: a white header bar, a lead story slot (the detected h1 is a headline about "Treasury Coin Market"), a "MOST VIEWED" panel with READ and WATCH toggles, a labelled advertisement slot, and a three-column grid of story cards, finishing with a "FIND OUT MORE" button.

The capture shows the header with the "VOICE online" logo (teal wordmark, orange "online"), uppercase section links "POLITICS", "ECONOMICS", "WORLD", "ENTERTAINMENT", "WELL-BEING", "LOCAL", "NEWS", "BLOG", an orange "VOICE PLAZA" tag, and at the right "TV PROGRAMS", a white red-outlined "LIVE" button and two square icon buttons (search, sign-in). In the capture, article images had not loaded, so each card's image area shows its alt text on light gray (#eeeeee); each card below it has a small gray category label (for example "คุณภาพชีวิต", "การเมือง", "คุณภาพสังคม", "เศรษฐกิจ"), a bold Thai headline, a byline and a date such as "Jul 21, 2026". The last visible row of cards uses a dark charcoal (#333333) panel with white text. Two third-party ad creatives (a FlickReels banner and a sticky bottom ad with a close button) are in the capture; they are not brand UI. The voice is that of a news desk: direct headlines, category tags and dates, with no decoration.

## Colors
- `canvas` #f4f4f4 (largest measured background, 3474 weighted area) and `page-body` #ffffff (the header bar and cards' white areas).
- `surface-2` #eeeeee: card and image-placeholder fill (3269). `surface-3` #333333: the dark card panels (2366), with white text on them (white is the most-read text color at 2459 weighted characters).
- `ink` #000000 (1941 weighted characters): headline text on light cards. `ink-3` #222222 (589), `ink-6` #444444, `ink-5` #888888 (category labels, 357) and `ink-4` #aaaaaa (446, meta text on dark cards).
- `primary` #e6e6e6 with `on-primary` #000000: the measured "FIND OUT MORE" button, a light-gray fill with black text.
- `nav-link-text` #01778b: teal, the color of the measured nav anchor (178x22).
- `accent-orange` #f66604: the fill of the "VOICE PLAZA" tag (hover changes it to #fafafa with black text and a black border).
- `live-red` #dd2027: text and 1px border of the "LIVE" button.
- `hairline` #dbdbdb: card and rule borders.
Also measured: #3b5998 (a social-network blue, not brand UI) and #8a9299 for the "ADVERTISEMENT" label.

## Typography
Two families: Dindan Mai (5354 weighted characters; loaded at weights 300, 400 and 700 and used at 600 in headlines) and Pracharath (505), plus FontAwesome for icons. Both text faces carry Thai script. No letter-spacing is set anywhere.
- `display` Dindan Mai 30px/600, line-height 39px: the lead headline in white over the lead image.
- `subheading` 14px/700, line-height 21px: category labels such as "คุณภาพชีวิต" in #888888.
- `body` 10px/400, line-height 15px, uppercase: the "ADVERTISEMENT" label; the most-read size on the page is 19px (2567 weighted characters, the card headlines), followed by 30px (1417), 13px (580), 11px (347), 16px (311), 36px (294) and 14px (230).
- `button` 18px/700, line-height 27px; `nav` 16px/700, line-height 24px, uppercase Latin labels.
`display-mobile` is 20px/700 with 30px line-height, the "MOST VIEWED" heading measured at the mobile viewport.

## Layout
A centered grid of three equal-width cards inside the 1280px page with gaps between cards. The header is a 94px-tall, full-width white bar with a soft shadow. The lead story runs full width at the top beside the "MOST VIEWED" column. Paddings measured: 12px (82 uses), 20px (46), 15px (31), 5px (23), 40px (22), 9px, 24px, 10px, 50px, 2px, 25px, 80px, 23px. Density is high: each card repeats image, category, 2-to-4 line Thai headline, byline, date.

## Elevation & Depth
Subtle. The header bar has `rgba(0, 0, 0, 0.05) 0px 4px 20px 0px`. Two upward shadows (`rgba(0, 0, 0, 0.4) 0px -4px 6px -3px` and `rgba(0, 0, 0, 0.2) 0px -1px 1px 0px`) belong to the sticky bottom ad bar and are not brand shadows. Cards are separated by flat fill color (#eeeeee, #333333) on #f4f4f4.

## Shapes
Corners are small. Measured radii: 4px (15 elements: the nav tags and the LIVE button), 5px (11), 100% (8) and 50% (6) for circular icon buttons, `12px 0px 0px` (1) and 10px (1). The frontmatter records `none`, `xs` 4px, `sm` 5px, `md` 10px, `lg` 12px and `pill`. Cards and the "FIND OUT MORE" button are square (0px).

## Components
- **Header nav** (`nav`): white 94px bar, shadow 0 4px 20px rgba(0,0,0,0.05), padding 23px 12px; links in Dindan Mai 16px/700.
- **Nav link** (`nav-link`): teal #01778b, 16px/700, radius 4px, padding 0 15px.
- **VOICE PLAZA tag**: orange #f66604 fill, white text, 4px radius, 24px tall; hover becomes #fafafa with black text.
- **LIVE button**: 80x36, white fill, 1px solid #dd2027, text #dd2027, 16px/700, radius 4px, padding 5px 12px.
- **Primary button** (`button-primary`): "FIND OUT MORE", 179x51, fill #e6e6e6, text #000000, 18px/700, padding 12px 25px, radius 0.
- **Story card**: image area (#eeeeee while unloaded), a 14px/700 gray category, a 19px headline, a byline and date; dark variant on #333333 with white headline.
- **READ / WATCH toggle**: round icon plus label, in the "MOST VIEWED" panel.
- **Link** (`link`): 14px/700 category link in #888888.
- Not brand UI: advertisement slots, the sticky bottom ad and its close button, and the cookie notice.

## Design System Architecture
No public Voice TV design system or brand guidelines were found among the pages opened here; none is cited. The page declares no CSS custom properties (`rootVars` is empty); styles are hard-coded, with FontAwesome for icons and two custom Thai families (Dindan Mai, Pracharath). The CSS values listed above are the de-facto system. Source: measured page https://voicetv.co.th/ via `web/data/extracted/voice-tv.json`.

## Do's and Don'ts
Do
- Set card headlines at 19px in Dindan Mai on #eeeeee or #333333, with a 14px/700 category above them.
- Keep section links uppercase at 16px/700 in a white bar with a soft shadow.
- Use the orange #f66604 tag and red #dd2027 LIVE outline as the only saturated notes.
- Use a light gray square button for "FIND OUT MORE".
- Keep image slots square-cornered.

Don't
- Don't style ad creatives, the sticky bottom ad or cookie notices as brand UI.
- Don't use the Facebook blue #3b5998 as a brand color.
- Don't set letter-spacing; none is used.
- Don't add shadows to cards; only the header has one.

## Responsive Behavior
The mobile pass recorded: the heading "MOST VIEWED" at 20px/700 with 30px line-height in a 360px-wide box (desktop 30px/39px); the lead headline h2 at 18px/600 with 23.4px line-height in a 320x57 box; the "ADVERTISEMENT" label unchanged at 10px/15px; the "FIND OUT MORE" button unchanged at 179x51; and a 390px-wide, 56px-tall header bar whose recorded text is "LIVE" in #dd2027 with padding 8px 12px and the same header shadow. The mobile size ranking is led by 19px (2772), 18px (1238), 13px (580), 16px (415), 11px (347), 14px (246), 35px (63). Column counts and breakpoints are not measured.

## Iteration Guide
1. Set canvas #f4f4f4, page-body #ffffff, ink #000000, dark card #333333.
2. Build a 94px white header with 16px/700 uppercase links, an orange tag and a red-outlined LIVE button.
3. Lay out three-column cards: image, category (14px/700 #888888), headline 19px, byline.
4. Use a #e6e6e6 square button with black 18px/700 text.
5. Keep Dindan Mai for all Thai text and avoid shadows except on the header.
6. Run `node web/scripts/verify-designs.mjs --slug=voice-tv`.
