---
version: alpha
name: Reddit, Inc.
category: "Media & Consumer Tech"
description: "Reddit, Inc.'s corporate site (redditinc.com) is built on OrangeRed #ff4500, black (#000000) and white: RedditDisplay ExtraBold 70px/800 headlines, Reddit Sans 20px/28.8px body, OrangeRed pill buttons (19.5px and 40px radii) and 24px-radius white stat cards on black bands."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#ff4500"
  on-primary: "#ffffff"
  ink-muted: "#737577"
typography:
  display:
    fontFamily: RedditDisplay-ExtraBold
    fontSize: 70px
    fontWeight: 800
    lineHeight: 70px
  display-mobile:
    fontFamily: RedditDisplay-ExtraBold
    fontSize: 48px
    fontWeight: 800
    lineHeight: 48px
  heading:
    fontFamily: "\"Reddit Sans Chocolate\""
    fontSize: 48px
    fontWeight: 800
    lineHeight: 49.9968px
  subheading:
    fontFamily: "\"Reddit Sans\", sans-serif"
    fontSize: 40px
    fontWeight: 800
    lineHeight: 50px
  body:
    fontFamily: "\"Reddit Sans\", sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 28.8px
  button:
    fontFamily: "\"Reddit Sans\", sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 23.04px
  button-lg:
    fontFamily: RedditSans
    fontSize: 20px
    fontWeight: 600
    lineHeight: 28.8px
rounded:
  xs: 19.5px
  sm: 24px
  md: 25px
  lg: 40px
  xl: 50px
spacing:
  s1: 6px
  s2: 8px
  s3: 10.5px
  s4: 15px
  s5: 20px
  s6: 23px
  s7: 24px
  s8: 26px
  s9: 30px
  s10: 40px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 6px 24px
    height: 39px
    borderColor: "{colors.primary}"
    boxShadow: rgba(51, 48, 47, 0) 0px 0px 0px 0px
  button-primary-hover:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
  button-large:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-lg}"
    rounded: "{rounded.lg}"
    padding: 8px 26px
    height: 49px
    borderColor: "{colors.primary}"
  link:
    textColor: "{colors.primary}"
    typography: "{typography.body}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    boxShadow: rgba(89, 89, 89, 0.1) 0px 4px 10px 0px
  stat-card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    rounded: "{rounded.sm}"
    padding: 30px 24px 24px
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.primary}"
    padding: 53px 0px 49px
---

# Reddit, Inc.

## Overview

This file describes **redditinc.com**, Reddit's corporate site (page title "Reddit Inc Homepage"). It is not the reddit.com product. The queue URL points to the corporate site, so the name here is that of the measured site's owner, Reddit, Inc. The page explains Reddit to press, investors and newcomers, in three flat colours: **OrangeRed `#ff4500`**, black and white. The brand page (https://redditinc.com/brand) names that orange exactly: the logo is "a stylized Snoo head contained within an OrangeRed (#FF4500) conversation bubble".

The capture opens on a 588px full-bleed OrangeRed hero. It holds the black headline "The heart of the internet", a short paragraph about "thousands of communities, endless conversation, and authentic human connection", and a glossy white 3D Snoo (the mascot) waving at the right. Next come a "How does Reddit work?" block, with a video thumbnail tiled in coloured pill-shaped subreddit names (r/personalfinance, r/battlestations, r/aww…), and three alternating Post / Comment / Vote rows. Each of those rows shows a phone screenshot on a saturated square (OrangeRed, mint, yellow). Then a black "Reddit by the numbers" band with four white stat cards ("130M+ Daily active uniques", "514M+", "100K+", "26B+"), a white "Reddit news" grid of four posts, and a black footer.

The tone is friendly and plain-spoken ("The community comments on posts. Comments provide discussion and often humor."), with large type and generous white space. The illustration language is the 3D Snoo and brightly coloured, rounded UI fragments.

## Colors

- **Primary `#ff4500`.** OrangeRed, published on the brand page. It fills the hero band, every button, and the news and footer accents, and it colours the stat numbers and footer column headings.
- **On-primary `#ffffff`.** Button labels are white on OrangeRed.
- **Canvas `#ffffff`.** The body background and the largest measured area (1,651 units), plus the header and news section.
- **Ink `#000000`.** The most-read text colour (1,126 characters), and also the second-largest background (1,431 units): the "by the numbers" band and the footer are solid black.
- **Ink muted `#737577`.** Small 12px meta text (46 characters), such as stat-card captions and dates.

Imagery adds a mint green and a warm yellow behind the product screenshots, but these come from images and were not measured as CSS colours, so they are not tokens. A `#333637` fill (and the same colour at 70% alpha) was measured on a few small elements.

## Typography

The brand page introduces **Reddit Sans**, "built for the Internet, with clear, accessible letterforms that still maintain some of the warm eclectic nature of online discourse… a large x-height for readability". The site loads three related faces:

- **RedditDisplay-ExtraBold** (self-hosted `RedditDisplay-ExtraBold.ttf`) for the h1: **display** 70px/800 with a 70px line height (solid leading), breaking over two lines.
- **Reddit Sans Chocolate** 800 for the numbers band: **heading** 48px/800, used for "Reddit by the numbers" and the stat figures.
- **Reddit Sans** (served through Google Fonts paths, weights 400, 700 and 800, plus a self-hosted SemiBold) for everything else. **Subheading** is 40px/800 with a 50px line height ("How does Reddit work?", "Post", "Comment", "Vote"). **Body** is 20px/400 with 28.8px leading, the dominant size (1,072 characters). **Button** is 16px/700, and the larger **button-lg** is 20px/600.

Footer column headings are Reddit Sans 24px/700 in OrangeRed. The measured sizes are 12, 14, 16, 20, 24, 40, 48 and 70px. No letter-spacing was applied anywhere (`letterSpacingBySize` is empty). Reddit Sans is open-source on Google Fonts, so no substitute is needed.

## Layout

Measured at 1280px wide and 5,324px tall, in six bands:
1. Header, 118px, white: logo at the left; "Company", "Values", "News", "Support" and the "Visit Reddit" pill at the right; a soft drop shadow.
2. Hero, 588px, OrangeRed: copy in the left column (x 154–628), Snoo at the right.
3. A white explainer band, 2,205px: "How does Reddit work?" and then the Post/Comment/Vote rows in an alternating image-text zigzag, content x 174–1126.
4. A black numbers band, 692px: the heading, a sub-line, "As of June 2026", and four equal stat cards in a row.
5. A white news band, 1,172px: "Reddit news" with a two-column grid of image cards, then a centred "View more blog posts" button.
6. A black footer, 549px: the logo at the left and three link columns (Company, Community, Privacy & Safety).

Measured gaps are 40px and 60px; paddings include 100px (section padding), 30px, 24px, 20px and 15px. The content column is centred and narrow relative to the 1280px viewport (left edge at 154px), which leaves wide margins.

## Elevation & Depth

The site is almost entirely flat. The header carries the only visible shadow, `rgba(89, 89, 89, 0.1) 0px 4px 10px 0px`. The buttons declare a fully transparent shadow, `rgba(51, 48, 47, 0) 0px 0px 0px 0px`. On hover the "Visit Reddit" button's shadow offset moves to `4px 4px 0px 0px` (still transparent, colour `rgba(51, 48, 47, 0)`), so the hover state shows as a colour swap, not a lift. Depth comes from the 3D Snoo renders and from the contrast between OrangeRed, black and white bands.

## Shapes

Everything is round. The header CTA uses a 19.5px radius on a 39px-tall button, which makes it a full pill. Larger buttons use 40px on a 49px height. 50px is used by a second, 47px-tall "Visit Reddit" pill measured in the hover pass. Stat cards and image cards use 24px and 25px (25px is the most frequent radius, on eight elements). The subreddit tags in the explainer image are pill-shaped speech bubbles, which echo the conversation bubble around Snoo in the logo. No element is square-cornered except full-bleed bands.

## Components

- **Primary pill button.** "Visit Reddit": `#ff4500` fill, a `2px solid #ff4500` border, white Reddit Sans 16px/700, 6px 24px padding, 39px tall, 19.5px radius. Hover inverts it to a white fill with OrangeRed text.
- **Large pill button.** "View more blog posts" and "Reddit press": the same colours with RedditSans 20px/600, 8px 26px padding, 49px tall, 40px radius.
- **Header.** White, 106px tall as measured, with the shadow above. The active item ("Company") is underlined.
- **Stat card.** White on the black band, 228×160px, 24px radius, 30px 24px 24px padding. The figure is in OrangeRed Reddit Sans Chocolate 48px/800, and the label in small black text below.
- **Feature row.** A 40px/800 title and 20px body on one side, and a rounded square of product screenshots on a saturated colour on the other, alternating sides.
- **News card.** A 24px-radius image (OrangeRed, black or yellow with Snoo or the wordmark), a bold black headline, then the date.
- **Footer.** Black; OrangeRed 24px/700 column headings and white links; social icons at the bottom left; copyright at the bottom right.

## Design System Architecture

Reddit publishes brand resources at https://redditinc.com/brand. That page links to "Brand guidelines – How to use Reddit brand assets", "Logo assets – Our logo, wordmark, & share icons", "Reddit Sans – Typeface of the internet", "Traits & values" and "Snoo". It also defines the logo (the Snoo head in an OrangeRed #FF4500 bubble, paired with the wordmark) and the role of Snoo as mascot. This file does not cover the product UI system used on reddit.com. The corporate site itself runs on HubSpot CMS: fonts and the logo are served from `/hubfs/` and `hubspotusercontent` paths, and no CSS custom properties were measured on `:root` (`rootVars` is empty). The de facto system is therefore the three-colour palette, the Reddit Sans family and the pill-and-24px-card shape vocabulary described here.

## Do's and Don'ts

**Do**
- Use OrangeRed `#ff4500` boldly: full-bleed hero bands, filled pills, stat numbers, footer headings.
- Alternate white and black bands; keep text black on white and white or OrangeRed on black.
- Set headlines in Reddit Display/Reddit Sans ExtraBold with tight, solid leading, and body text at a generous 20px.
- Round everything: pill buttons and 24px cards.
- Use Snoo and colourful UI fragments as the illustration language.

**Don't**
- Don't recolour the logo bubble; the brand page fixes it at OrangeRed #FF4500.
- Don't add letter-spacing; none was measured.
- Don't use heavy shadows; only the header has a soft one.
- Don't treat the image-only mint and yellow as UI colours.

## Responsive Behavior

Measured at 390px wide. The h1 drops from 70px to **48px/48px** (display-mobile) and still breaks over two lines (measured height 96px). "Reddit by the numbers" drops from 48px to 32px. Body text drops from 20px/28.8px to 16px/23.04px. The large button drops to RedditSans 16px/600 (the "View more blog posts" measurement on mobile) but keeps its 40px radius. The header shows the logo and a "Menu" control; three header links were measured as visible (`headerLinksVisible: 3`). In the mobile capture, the hero text, the Snoo image and every feature row run in a single column. The four stat cards appear one per row, and the footer columns appear one after another. Breakpoint widths were not measured.

## Iteration Guide

1. Start with three colours only: `#ff4500`, `#000000`, `#ffffff`, plus `#737577` for small meta text.
2. Open with a full-bleed OrangeRed hero, a black ExtraBold 70px headline (48px on mobile) and a Snoo illustration.
3. Use pill buttons: OrangeRed with white text, inverting to white with OrangeRed text on hover.
4. Present data as 24px-radius white cards on black, with numbers in OrangeRed at 48px/800.
5. Keep body copy at 20px/28.8px Reddit Sans with no tracking.
6. Check against the brand page: the logo must stay inside the OrangeRed bubble and be paired with the wordmark.
