---
version: alpha
name: Purpose Talent
category: "Tech & AI"
description: "Purpose Talent is a warm cream-and-ink search consultancy site: #f9f2e9 canvas, #1e1e1e ink, a #f0b420 yellow pill CTA with white Raleway 700 text, uppercase Tay Bea display type at 110.08px and 52.48px, 16-35px card radii, and soft warm shadows (rgba(123, 94, 92, 0.06))."
colors:
  canvas: "#f9f2e9"
  ink: "#1e1e1e"
  primary: "#f0b420"
  on-primary: "#ffffff"
  surface-cream: "#fffaf3"
  ink-taupe: "#a79785"
typography:
  display:
    fontFamily: "\"Tay Bea\", sans-serif"
    fontSize: 110.08px
    fontWeight: 500
    lineHeight: 88.064px
    textTransform: uppercase
  display-mobile:
    fontFamily: "\"Tay Bea\", sans-serif"
    fontSize: 75.66px
    fontWeight: 500
    lineHeight: 60.528px
    textTransform: uppercase
  heading:
    fontFamily: "\"Tay Bea\", sans-serif"
    fontSize: 52.48px
    fontWeight: 400
    lineHeight: 47.232px
    textTransform: uppercase
  button:
    fontFamily: Raleway, sans-serif
    fontSize: 14.08px
    fontWeight: 700
    lineHeight: 15.488px
  button-secondary:
    fontFamily: Raleway, sans-serif
    fontSize: 11.52px
    fontWeight: 600
    lineHeight: 13.824px
rounded:
  xs: 16.64px
  sm: 20.48px
  md: 28.16px
  lg: 34.56px
  pill: 9999px
spacing:
  s1: 3.84px
  s2: 5.12px
  s3: 6.4px
  s4: 7.68px
  s5: 8.96px
  s6: 10.24px
  s7: 14.08px
  s8: 16.64px
  s9: 20.48px
  s10: 25.6px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 14.08px 32px
    height: 46px
  button-secondary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.surface-cream}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.pill}"
    padding: 3.84px 14.08px 3.84px 3.84px
    height: 28px
  link:
    textColor: "{colors.ink-taupe}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 14.08px 32px
    borderColor: "{colors.ink-taupe}"
  card:
    backgroundColor: "{colors.surface-cream}"
    textColor: "{colors.ink}"
    rounded: "{rounded.lg}"
    padding: 28.16px 0px
    boxShadow: rgba(123, 94, 92, 0.06) 5px 2px 9px 0px
    transform: matrix(0.997564, -0.0697565, 0.0697565, 0.997564, 0, 25.6)
---

## Overview
Measured from https://www.purposetalent.xyz/ (document title "Purpose Talent"; scroll height 13233px). The firm is a search and talent consultancy founded in 2020 by Andrew Blancato, per the opened page. The home page headline is "WORK THAT MATTERS" with the label "Search + Talent Consultancy" and the line "Connecting groundbreaking companies with extraordinary talent". Navigation pills read Companies and Candidates, the centre carries the logo, and a dark "Contact" pill with an icon sits at the right; a red "Site of the Day" tab on the right edge is an awards badge, not brand UI. The opened page lists four services (Executive Search, Next-Gen Search, Coaching, Talent Strategy Consulting), testimonials, a Stories section, a founder bio, client logos and a contact section; the pitch cites Kickstarter, Casper and Etsy as companies the founders helped build.

The look is hand-made and friendly: a cream paper-like ground, big black hand-lettered uppercase headings with a yellow burst, a hand-drawn illustration of a figure in a yellow sweater jumping beside a desk, highlighted client names in pill marks (yellow, lavender, coral), and rotated tilted cards further down the page. The copy voice is warm, confident and mission-driven with short fragments ("We've been there. we know what it takes.").

## Colors
The root variables publish the palette: `--bg-color: #f9f2e9`, `--black: #1e1e1e`, `--light-black: #403f3e`, `--yellow: #f0b420`, `--purple: #b0a5f4`, `--red: #f36c5a`, `--gray: #fffaf3`, `--light-brown-gray: #f2e8dc`, `--dark-brown-gray: #e8ddd0`, `--light-brown: #a79785`. Measured backgrounds by area: `canvas` #f9f2e9 (4439), #1e1e1e (4022, the dark sections and footer), `surface-cream` #fffaf3 (3345), #f2e8dc (1748, nav pills), `primary` #f0b420 (42), lavender #b0a5f4 (13) and coral #f36c5a (1).

Text colors by characters: `ink` #1e1e1e (1913), cream #f9f2e9 (572, on dark bands), white (164, on the yellow button), `ink-taupe` #a79785 (39, secondary links) and #fffaf3 (7). Border colors: #f0b420 (3), #b0a5f4 (2), #a79785 and #f36c5a. The yellow, lavender and coral accents mark the highlighted client names (Kickstarter yellow, Casper lavender, Etsy coral in the capture).

## Typography
Two families: "Tay Bea" (342 chars; weight 400 loaded) for the uppercase display lines and Raleway (2353 chars; weights 100 to 900 loaded) for everything else. Tay Bea is a hand-drawn display face; its source was not opened.

Measured roles: `display` is the "WORK" line at 110.08px/88.064px, weight 500 (the weight is synthesized from the single 400 file), uppercase; `heading` is 52.48px/47.232px weight 400 uppercase ("WE'VE BEEN THERE. WE KNOW WHAT IT TAKES."). On mobile the display line is 75.66px/60.528px. Buttons use Raleway 14.08px/15.488px weight 700, and the small nav pills 11.52px/13.824px weight 600. Sizes by characters: 14.08px (1587), 16.64px (355), 52.48px (209), 11.52px (194), 10.24px (193), 34.56px (95), 23.04px (24), 88.32px (23), 110.08px (15). Weights: 500 (1596), 600 (540), 700 (327), 400 (232). No letter-spacing is measured. Note that the sizes are fractional: they are 1.28 multiples (14.08 = 11 x 1.28) of a fluid unit.

## Layout
The page is a long scroll of generous bands (13233px) on a cream ground: a hero with illustration and headline, a large empty-looking band in the capture (content loaded on scroll), then a two-column block with a four-line uppercase statement left and a paragraph right, followed by tilted cards. Gaps measured: 14.08px and 10.24px (28 uses each), 25.6px (26), 5.12px (26), 34.56px (20), 94.72px (12), 20.48px, 37.12px, 51.2px. Paddings include 28.16px (22 uses), 3.84px (18), 7.68px (16), 20.48px, 14.08px, 32px (13 each), 42.24px, 40.96px, 89.6px, 102.4px. The measured layout data (header links, columns) is not recorded for this site.

## Elevation & Depth
Two nearly identical warm shadows: `rgba(123, 94, 92, 0.06) 1px 2px 9px 0px` (50 uses) and `rgba(123, 94, 92, 0.06) 5px 2px 9px 0px` (10, the tilted cards). They are barely visible, tinted brown-pink rather than black. Depth also comes from layering cream (#fffaf3) cards over the #f9f2e9 ground and from the rotated card transform.

## Shapes
Radii by weight: 20.48px (58, cards and tiles), 1280px (29, fully round pills), 34.56px (20, large cards), 28.16px (8), 100% (3, circles), 16.64px (2) and 0 0 20.48px 20.48px (1). Buttons and nav chips are pills; content tiles use 20-35px corners. The illustration is drawn with an uneven black outline and flat yellow fill.

## Components
- **button-primary**: "Learn more", #f0b420 fill, white Raleway 14.08px/700 text, pill radius, padding 14.08px 32px, 46px tall (143px wide).
- **button-secondary**: "Contact" pill, #1e1e1e fill, #fffaf3 text at 11.52px/600, padding 3.84px 14.08px 3.84px 3.84px, 28px tall, with a round icon at the left.
- **nav chips**: Companies and Candidates, #f2e8dc fill, #1e1e1e text, 28px tall pills.
- **link** ("Get in touch"): outlined pill, #a79785 text and border; on hover the text becomes white and the border disappears (measured hover).
- **card**: #fffaf3, 34.56px radius, padding 28.16px 0, warm shadow, and a slight tilt (transform matrix(0.997564, -0.0697565, 0.0697565, 0.997564, 0, 25.6), a rotation of about 4 degrees).

## Design System Architecture
No design system, brand guideline or press page is linked from the opened page; the only credit-like link is an Awwwards listing for the site (https://www.awwwards.com/sites/purpose-talent), not opened. The de-facto system is a tiny set of ten named CSS variables (colors above) plus fluid sizing in multiples of 1.28. The "Site of the Day" red tab is an Awwwards badge and is not part of the brand system.

## Do's and Don'ts
- Do set headlines in uppercase Tay Bea at large sizes with tight line height (0.8 of the font size).
- Do use #f0b420 for the single main action and keep it pill-shaped.
- Do put dark #1e1e1e bands against the cream ground.
- Don't use the red Awwwards tab or its color as a brand element.
- Don't use hard black shadows; keep the warm 0.06 alpha shadow.
- Don't use sharp corners: radii start at 16.64px.

## Responsive Behavior
At the 390px mobile pass the display line is 75.66px/60.528px, the "Learn more" button is 175 x 52px with 15.6px/700 text, radius 390px and padding 16.38px 26.91px. Font sizes concentrate at 15.6px (1610 chars), 20.67px (363), 34.32px (202), 12.48px (172) and 14.43px (134); the larger sizes are 44.46px, 60.06px and 75.66px. Navigation collapse and column changes are not measured.

## Iteration Guide
1. Start from #f9f2e9, add #fffaf3 cards and #1e1e1e dark bands.
2. Use Tay Bea uppercase for headings and Raleway 500 for 14.08px body.
3. One yellow #f0b420 pill CTA per view; secondary actions as dark or outlined pills.
4. Tilt cards slightly with the measured rotation and keep shadows at alpha 0.06.
5. Re-measure with `node web/scripts/extract-tokens.mjs --slug=purpose-talent --url=https://www.purposetalent.xyz/ --force --no-motion` after changes.

## Imagery and Content Notes
The hero illustration is a single hand-drawn character in a yellow sweater, arms raised, jumping beside a desk with a laptop, a shelf of books and a potted cactus, drawn with a thick, slightly wobbly black outline and flat color with no gradients. A faint beige shape sits behind the page edge at the right. The first sub-label, "Search + Talent Consultancy", is small grey Raleway, the sentence below it is dark and slightly larger, and the two buttons sit side by side: a filled yellow "Learn more" and an outlined "Get in touch". The second block puts four uppercase lines on the left and a short paragraph on the right in which three client names are highlighted with colored rounded marks. The header shows a clock line, "New York | 11:58 pm", which gives the page a local, personal touch. Below the fold the capture shows slightly rotated cream cards with line drawings.
