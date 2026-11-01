---
version: alpha
name: Lightnet
category: "Thai Brands"
description: "Lightnet (cross-border payment infrastructure) design system: Inter at weight 400 with a 60px hero, indigo #29338a gradient fading to aliceblue #f0f8ff, white 50px-radius pill buttons and 30px bordered cards."
colors:
  canvas: "#f0f8ff"
  page-body: "#ffffff"
  ink: "#606060"
  primary: "#29338a"
  on-primary: "#ffffff"
  button-surface: "#ffffff"
  ink-black: "#000000"
  surface-card: "#f1f5f9"
  ink-secondary: "#7d7d7d"
  ink-near-black: "#222222"
  ink-navy-black: "#12161d"
  hairline: "#e5e5e5"
  link-bg: "#c8c8c8"
typography:
  display:
    fontFamily: Inter, sans-serif
    fontSize: 60px
    fontWeight: 400
    lineHeight: 67.8px
    letterSpacing: "-0.6px"
  display-mobile:
    fontFamily: Inter, sans-serif
    fontSize: 40px
    fontWeight: 400
    lineHeight: 45.2px
    letterSpacing: "-0.4px"
  body:
    fontFamily: Inter, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 23.8px
  button:
    fontFamily: Inter, sans-serif
    fontSize: 17px
    fontWeight: 500
    lineHeight: 27.0001px
  link:
    fontFamily: Inter, sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 8px
  sm: 10px
  md: 30px
  lg: 50px
  pill: 9999px
spacing:
  s1: 4px
  s2: 5px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 15px
  s7: 16px
  s8: 20px
  s9: 23px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.button-surface}"
    textColor: "{colors.ink-black}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    height: 61px
    boxShadow: rgba(0, 0, 0, 0.05) 0px 1px 10px 0px inset
  button-secondary:
    backgroundColor: "{colors.button-surface}"
    textColor: "{colors.ink-black}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    height: 61px
    boxShadow: rgba(0, 0, 0, 0.05) 0px 1px 10px 0px inset
  link:
    backgroundColor: "{colors.link-bg}"
    textColor: "{colors.page-body}"
    typography: "{typography.link}"
    padding: 20px
    borderColor: "{colors.hairline}"
  nav:
    textColor: "{colors.page-body}"
  nav-link:
    backgroundColor: "{colors.button-surface}"
    textColor: "{colors.ink-black}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    boxShadow: rgba(0, 0, 0, 0.05) 0px 1px 10px 0px inset
  card:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.ink-black}"
    rounded: "{rounded.md}"
    padding: 25px 23px
    borderColor: "{colors.hairline}"
---

# Lightnet

## Overview
Lightnet is a cross-border payment infrastructure company; the page title is "Cross-Border Payment Infrastructure - Lightnet" and the hero headline is "Global Payment Infrastructure for Cross-Border Transfers", with the subline "Lightnet enables businesses to send and receive payments across the world. Fast, transparent global payments with lower costs." The top of the page is a deep blue gradient hero with a dotted-globe illustration at the right edge, a white-on-blue header (logo with ring mark and "LIGHTNET" wordmark, Home, Products, About us, Resources) and a white pill "Contact sales" button with a black circular arrow icon. A matching white pill "Talk to an expert" sits under the subline. The blue fades into a pale blue page where three large figures (100+, 200k+, $15B+) with grey captions are separated by hairlines, a "Trusted by leading companies across Asia" logo row follows (CIMB, J.P.Morgan, DBS, SCB and others), and a "Settlement / Move money across borders" section presents five rounded feature cards, then four more benefit items (Institution-grade uptime & SLAs, Full transparency, Configurable workflows, Regulatory assurance) and a "Solutions" section. The voice is institutional, plain and factual, with short claims and numbers.

## Colors
The brand color is deep indigo-blue `#29338a` (the site's `--brand` variable), which is the top of the hero gradient: `linear-gradient(rgb(41, 51, 138), rgb(56, 81, 163) 47%, rgb(136, 158, 229) 72%, rgba(255, 255, 255, 0))`, so the blue lightens downward and dissolves into the page. The canvas below the hero is a pale aliceblue `#f0f8ff` (`--light-blue`), the largest background area; feature cards are `#f1f5f9`, buttons are white `#ffffff`, and a grey `#c8c8c8` appears on link boxes. Text is black `#000000` for headings, `#606060` for body, `#7d7d7d` for captions (`--secondary` and `--squash`), `#222222` and `#12161d` for small amounts, and white on the hero. Strokes use `#e5e5e5` (`--stroke`) and `#e5e7eb` (`--light-gray`). The color system is therefore one saturated blue plus a family of pale blue-greys and neutrals.

## Typography
Inter is the only family (4,292 measured characters; weights 300 to 700 loaded). The hero headline is 60px, weight 400, line-height 67.8px, letter-spacing -0.6px; the section headline "Move money across borders" is 40px weight 400 with 50px line-height and -0.08px tracking. Card titles are 24px weight 600 with 30px line-height; body copy is 16px (3,068 characters) with 0.032px tracking, and secondary text 14px with 23.8px line-height; button labels are 17px weight 500 with 27px line-height; link text is 20px. Weight 400 is nearly universal (3,876 characters), with 500 and 600 reserved for buttons and card titles. The look is light, large and airy at display sizes. Inter is an open font, so no substitute is needed.

## Layout
The desktop capture is 1,280px wide and 7,273px tall. The header floats over the hero. The hero text is left aligned in a narrow column; the statistics and section headings are centered; feature cards run five across; benefit items are laid out in a flexible row with an illustration to the right. Measured gaps are 20px (23 uses), 16px, 24px, 15px, 12px and 80px; paddings are 50px (27 uses), 24px, 25px, 40px and 112px. Sections are separated by generous vertical space and soft blue wave line art in the background.

The header menus expand into groups: Products lists Digital assets, Cross-border payments, Merchant payments and Corporate treasury & FX, and Resources lists Newsroom, Legal and compliance and Career. The page then continues with a "Solutions" band ("Where Lightnet works best") whose tabs match the four product lines, each tab opening a heading such as "Convert and settle with confidence" with a short paragraph about moving between crypto and fiat. Copy is written in short declarative sentences without marketing adjectives, which matches the restrained, light-weight typography: the brand speaks as infrastructure rather than as a consumer app. Icons are small blue gradient tiles on the cards, and the globe illustration in the hero is built from white dots and thin white arcs rather than photography.

## Elevation & Depth
There are no outer shadows; the only measured shadow is a faint inset `rgba(0, 0, 0, 0.05) 0px 1px 10px 0px inset` on the white pill buttons (4 uses). Depth comes from the hero gradient, translucent light cards on the pale background, and background wave illustration. The hover state of "Contact sales" adds a white border (from `rgba(255, 255, 255, 0)` to `rgb(255, 255, 255)`).

The statistics row uses very large figures with a caption underneath in grey `#7d7d7d`, and the partner logos are shown in their own colors on the pale canvas, so the only saturated color on the lower page is the logos themselves and the small blue icon tiles.

## Shapes
Buttons are pills (50px radius; the extractor also read 1000px); feature cards use 30px radius with a 1px `#e5e5e5` border; smaller panels use 10px and 8px; icon tiles and arrows are circles (50%). The consistent theme is very round, with 30px cards matching the pill buttons.

## Components
**button-primary**: white pill, black text, Inter 17px weight 500, radius 50px, height 61px, faint inset shadow; it appears as "Talk to an expert" (225px wide) with a black circular arrow icon.
**button-secondary**: identical styling for "Contact sales".
**nav-link**: white pill styling in the header with Inter 17px.
**link**: 20px text on a `#c8c8c8` box with a `#e5e5e5` border, padding 20px.
**card**: `#f1f5f9` fill, 30px radius, 1px `#e5e5e5` border, padding 25px 23px, black 24px/600 title, grey 14px description; the measured cards are 230px wide and 332px tall, each with a small blue gradient icon tile.

## Design System Architecture
No public design-system page or brand guideline was found on the home page. The site publishes a minimal set of root variables: `--brand` `#29338a`, `--secondary` and `--squash` `#7d7d7d`, `--light-gray` `#e5e7eb`, `--stroke` `#e5e5e5`, `--text-color` black, `--light-blue` aliceblue, `--black` and `--white`. Everything else is local styling, so the de-facto system is: blue gradient hero, aliceblue canvas, white pill buttons, 30px bordered cards and Inter at 400 weight.

## Do's and Don'ts
- Do open pages with the `#29338a` gradient hero that fades into the aliceblue canvas.
- Do use white pill buttons with a black circular arrow for the main calls to action.
- Do show large numeric proof points with grey captions and thin dividers.
- Do keep cards at 30px radius with a 1px `#e5e5e5` border.
- Don't use heavy weights for headlines; weight 400 is the norm at 40px and 60px.
- Don't add drop shadows.
- Don't introduce additional saturated colors; the system is blue plus neutrals.

## Responsive Behavior
At the 390px mobile pass the hero headline measured 40px, weight 400, line-height 45.2px, letter-spacing -0.4px in a 358px block (60px on desktop). The "Talk to an expert" button measured 15px type, height 49px and width 203px (17px, 61px and 225px on desktop). Mobile font sizes by character count: 14px (3,356), 16px (351), 20px (220), 28px (143), 15px, 40px, 18px; the 40px desktop section heading appears at 28px on mobile by character count. Breakpoint widths and menu behavior were not measured.

## Iteration Guide
1. Use canvas `#f0f8ff`, white `#ffffff`, ink `#606060`, brand `#29338a`.
2. Build the hero with the four-stop blue gradient, a left-aligned 60px headline and a white pill CTA.
3. Add centered stats, a partner logo row and a five-card feature row.
4. Keep text light (400) and cards rounded at 30px.
5. Re-run the gate after edits.
