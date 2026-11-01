---
version: alpha
name: "Thansettakij"
category: "Thai Brands"
description: "Thai business news publisher (ฐานเศรษฐกิจ): Prompt at weight 700, 34px headlines on white #ffffff, black ink #000000, orange accent #ff8500, rust #dd5521, gray #e2e2e2 category bar and square-cornered image cards."
colors:
  canvas: "#ffffff"
  page-largest: "#e2e2e2"
  ink: "#000000"
  primary: "#ff8500"
  ink-2: "#5a5a5a"
  ink-4: "#ffffffcc"
  ink-5: "#333333"
  hairline: "#f7931e"
  brand-rust: "#dd5521"
  footer-bg: "#999999"
typography:
  display:
    fontFamily: Prompt, "Noto Sans Thai", "Helvetica Neue", sans-serif
    fontSize: 32px
    fontWeight: 700
  display-mobile:
    fontFamily: Prompt, "Noto Sans Thai", "Helvetica Neue", sans-serif
    fontSize: 26px
    fontWeight: 700
    lineHeight: 39px
  heading:
    fontFamily: Prompt, "Noto Sans Thai", "Helvetica Neue", sans-serif
    fontSize: 48px
    fontWeight: 700
    lineHeight: 72px
  subheading:
    fontFamily: Prompt, "Noto Sans Thai", "Helvetica Neue", sans-serif
    fontSize: 34px
    fontWeight: 700
    lineHeight: 49.3px
    textTransform: capitalize
  body:
    fontFamily: Prompt, "Noto Sans Thai", "Helvetica Neue", sans-serif
    fontSize: 12px
    fontWeight: 400
    letterSpacing: 1px
  link:
    fontFamily: Prompt, "Noto Sans Thai", "Helvetica Neue", sans-serif
    fontSize: 16px
    fontWeight: 400
rounded:
  xs: 32px
  pill: 9999px
spacing:
  s1: 1px
  s2: 3.75px
  s3: 5px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 14px
  s8: 15px
  s9: 20px
  s10: 24px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.ink}"
    padding: 0px 15px
  footer:
    backgroundColor: "{colors.footer-bg}"
    textColor: "{colors.ink}"
---

## Overview

Thansettakij (ฐานเศรษฐกิจ) is a Thai business and economics news publisher; the measured page is its Thai home, thansettakij.com, titled "ฐานเศรษฐกิจ | ข่าวเศรษฐกิจ การลงทุน อสังหาฯ และเทคโนโลยี AI ล่าสุด" (economic news, investment, real estate and AI technology). The page opens with a full-width sponsor banner, then a centred black "ฐาน เศรษฐกิจ" wordmark, a gray category bar (อสังหาริมทรัพย์, เศรษฐกิจ-นโยบาย, Climatecenter, ธุรกิจ, Health & Wellness, ยานยนต์, การเมือง, plus grid, search and account icons), a three-dot carousel indicator, and a hero story: a large illustrated or photographic feature on the left and two stacked story cards on the right, each with a bold Thai headline and a date line such as "09 ต.ค. 2569 | 07:35 น.". Below are another wide banner promotion and sections of news cards.

The visual identity is a black wordmark on white with an orange accent (#ff8500) and a rust orange-red (#dd5521) from the site's own variables. The page is highly image-driven: AI-style editorial illustrations, press photos and sponsor creatives take most of the visible area, and typography is a single heavy Thai sans, Prompt. It reads as a dense Thai news portal with strong headlines and modest chrome.

## Colors

The canvas is white (#ffffff) and the most extensive background area is a light gray #e2e2e2 (the category bar and bands). Ink is black (#000000) for headlines; #333333 and #5a5a5a are used for secondary text and the date lines; #ffffffcc is a translucent white on dark overlays. The footer fill is #999999.

The site's own root variables define the palette: --primary-color #dd5521 (rust orange), --secondary-color #ff8500 (orange), --quaternary-color #de5521, --tertiary-color #e6e6e6, --background-color #f8f8f8, --border-color #ddd, --gray-color #999, --text-hover #ff8500, --shadow-color #f27a354d and --lottery #4a240a (a dark brown for the lottery section). The measured primary token is #ff8500, which is the site's text-hover and secondary color; the rust #dd5521 is added as brand-rust from the same variables. The hairline color is the amber #f7931e, and the h3 role shows a left-to-right orange gradient (from rgb(253, 141, 28)). The site also defines orange gradient presets (--secondary-gradient from #b05517 to #e97c00).

Measured but not brand: the extractor also read #0000ee as a link color; that is the browser default link color and is dropped here. Other background colors measured on the page are #f5f5f5, #5f9ea0 (a teal band behind the sponsored section), #1e5564 (a deep teal) and #212121e6 (a dark overlay); they belong to sponsor and special sections and are not part of the core identity.

## Typography

All text uses Prompt with Noto Sans Thai, Helvetica Neue and sans-serif as fallbacks. Loaded faces are Prompt 400 and Prompt 600 (plus the slick carousel icon font); the page applies weight 700 through the Prompt 600 file's synthesized or matched bold. Measured sizes: the top-level text block is 32px at weight 700; the section heading (ข่าวล่าสุด) is 28px weight 700; the featured story headline is 34px, weight 700, line height 49.3px with a capitalize transform; and the footer copyright is 12px weight 400 with 1px letter spacing. At the 390px mobile pass, the h1 role measures 20px with a 29px line height (capitalize), the h2 28px, and body text 12px. Headlines are heavy and tight; metadata (dates) is small and gray.

## Layout

The page uses a centred masthead above a full-width gray category bar. The hero is a two-column composition: roughly two thirds for the lead story and one third for two stacked cards, each card pairing a 16:9 image with a two-to-three-line headline and a date line. Wide sponsor banners interrupt the flow of editorial sections; a teal sponsored strip with three small cards follows a large promotional banner. Spacing values measured include 1px, 3.75px, 5px, 8px, 10px, 12px, 14px, 15px, 25px and 30px; navigation items have 15px horizontal padding.

## Elevation & Depth

Depth is minimal. Measured shadows are faint: rgb(248, 248, 248) 0px 0px 2px 0px and rgb(183, 183, 183) 0px 0px 2px 0px for card edges, rgba(0, 0, 0, 0.3) 0px 5px 6px -6px under the sticky bar, and rgba(0, 0, 0, 0.2) 0px 4px 20px 0px on one floating element. Stories are separated by white space and image edges rather than borders.

## Shapes

Measured radii: 50% (carousel dots and circular icons), 4px, 8px and 32px. The majority of cards and images are square-cornered. No primary button was detected, so no button-primary token is declared; the only rounded-rectangle elements are small chips and the 32px/8px containers.

## Components

- Masthead: black wordmark centred on white.
- Category bar: #e2e2e2 band with black Thai labels, small triangle markers for sub-menus, and icon buttons for the app grid, search and account.
- Story card: image, headline in black at weight 700, gray date line.
- Hero story: large image with a 34px headline below.
- Footer: #999999 fill with #000000 text.
- Link: black text in the 34px/49.3px headline style.
- Consent bar: a small cookie dialog appears at the left of the category bar in the capture and is not a brand component.

## Design System Architecture

No public design system or brand guideline link was found on the home page, so no external research was done. The de-facto system is a CSS variable set in the site's root (--primary-color, --secondary-color, --quaternary-color, --tertiary-color, --background-color, --border-color, --gray-color, --text-hover, --shadow-color, --lottery and three gradient presets: --primary-gradient, --secondary-gradient, --gray-gradient) with Prompt as the type family. The slick carousel is the only third-party UI component font loaded.

The capture shows the editorial voice clearly. Headlines are long, information-rich Thai sentences with figures and named institutions (for example a World Trade Organization trade forecast, a fund raising 500 million baht, a data center tier standard), which gives the portal a market-briefing tone. Art direction mixes sharp press photography with polished illustrative composites that stack coins, banknotes and city skylines. The watermark of the masthead appears at the bottom corner of many images, tying third-party and in-house pictures to the brand. Sponsor creatives are loud and colorful, so the editorial chrome is kept neutral (black, white, gray) to let them coexist.

## Do's and Don'ts

- Do keep a black wordmark on white with an orange accent (#ff8500) and rust (#dd5521).
- Do use Prompt at weight 700 for headlines.
- Do use bold, large Thai headlines under an image, with a small gray date line.
- Do use gray (#e2e2e2) category bars and white canvas.
- Don't use #0000ee for links: it is the browser default.
- Don't use sponsor-section colors (teal #5f9ea0) as brand colors.
- Don't document the cookie dialog or sponsor banners as brand UI.

## Responsive Behavior

Measured at the 390px mobile pass: the h1 role is 20px with a 29px line height (capitalize) in a 340px box; the h2 is 28px in a 111px box; body text is 12px in a 340px box. Menu collapse, column stacking and breakpoints were not measured.

## Iteration Guide

1. Set canvas #ffffff, ink #000000, accent #ff8500, brand rust #dd5521.
2. Use Prompt, headlines at 34px weight 700 with 49.3px line height; dates at small gray.
3. Keep the category bar #e2e2e2.
4. Use square image corners; circular dots at 50%.
5. Hover states beyond --text-hover (#ff8500), dark mode and the mobile menu were not measured.
