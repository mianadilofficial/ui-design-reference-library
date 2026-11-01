---
version: alpha
name: DingTalk Teambition
category: "Design Systems"
description: "DingTalk Teambition's marketing site is a light, airy project-management pitch in the system font stack (-apple-system with PingFang SC for Chinese), 60px bold display headlines in #212121, a charcoal #353535 solid CTA with 8px radius, a blue-to-violet gradient download button, #0089ff blue eyebrow labels and generous 30px-radius pale cards on a white canvas."

colors:
  canvas: "#ffffff"
  ink: "#595959"
  primary: "#353535"
  on-primary: "#ffffff"
  surface-card: "#f5f9ff"
  surface-tint: "#f7f7ff"
  ink-body: "#878787"
  ink-slate: "#8697b4"
  ink-strong: "#212121"
  ink-muted: "#9fa4b7"
  ink-charcoal: "#393939"
  hairline: "#edeff3"
  accent-blue: "#0089ff"
  input-text: "#000000"
typography:
  display:
    fontFamily: "-apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", \"PingFang SC\", \"Noto Sans\", \"Noto Sans CJK SC\", \"Microsoft YaHei\", 微软雅黑, sans-serif"
    fontSize: 60px
    fontWeight: 700
    lineHeight: 74px
  display-mobile:
    fontFamily: "-apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", \"PingFang SC\", \"Noto Sans\", \"Noto Sans CJK SC\", \"Microsoft YaHei\", 微软雅黑, sans-serif"
    fontSize: 28px
    fontWeight: 700
    lineHeight: 46px
  heading:
    fontFamily: >-
      "Lucida Grande", "Luxi Sans", Arial, "Helvetica Neue", Helvetica, "Hiragino Sans GB", STHeiti, "Microsoft YaHei", "Wenquanyi Micro Hei", "WenQuanYi Micro Hei Mono", "WenQuanYi Zen Hei",
      "WenQuanYi Zen Hei Mono", LiGothicMed
    fontSize: 40px
    fontWeight: 700
    lineHeight: 46px
  body:
    fontFamily: "-apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", \"PingFang SC\", \"Noto Sans\", \"Noto Sans CJK SC\", \"Microsoft YaHei\", 微软雅黑, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 25.12px
  button:
    fontFamily: "-apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", \"PingFang SC\", \"Noto Sans\", \"Noto Sans CJK SC\", \"Microsoft YaHei\", 微软雅黑, sans-serif"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 16px
  input:
    fontFamily: Arial
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22.8571px
rounded:
  xs: 1px
  sm: 8px
  md: 10px
  lg: 12px
  xl: 16px
  2xl: 30px
  pill: 9999px
spacing:
  s1: 4px
  s2: 5px
  s3: 7px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 14px
  s8: 15px
  s9: 18px
  s10: 22px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 12px 18px
    height: 40px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
    rounded: "{rounded.md}"
    height: 50px
  link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.body}"
    rounded: "{rounded.lg}"
    padding: 10px
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.input-text}"
    typography: "{typography.input}"
    rounded: "{rounded.lg}"
    padding: 15px 30px 15px 24px
    height: 64px
    boxShadow: rgb(237, 241, 255) 0px 4px 16px 0px
  card:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.ink-strong}"
    rounded: "{rounded.2xl}"
    padding: 0px 0px 20px
---

## Overview

The measured page is www.teambition.com, titled "DingTalk Teambition · Alibaba Group Team Collaboration Tool". It is an English-language marketing page for a project-management and task-collaboration product that is integrated with DingTalk. The first screen is a nav bar (logo mark, "DingTalk Teambition", an "AI" glyph, Product, Pricing, Templates, Solutions, Cases, Service Support, Login and a gradient "Download DingTalk" button), then a centred four-line headline, "User-friendly Professional Project Management Platform", three grey supporting lines, a phone-number field with a dark "Use Now" button, and a row of greyed customer logos. Below, a segmented tab strip (Project Management, Task Collaboration, One-stop Experience) switches between product screenshots, each introduced by a small blue eyebrow, a large bold title ("Abundant Templates", "Be Informed, Anywhere, Anytime") and a two-line grey description.

The mood is clean and lightly futuristic. Soft pastel 3D illustrations in pale blue and lavender float beside the headline, a faint lavender wash sits behind the hero, and product screenshots appear as framed windows with soft shadows. Colour is restrained: charcoal for actions, black-to-grey for text, and one blue for emphasis.

## Colors

- **canvas (#ffffff)** is the page background; the first screen is dominated by near-white.
- **primary (#353535)** is the measured fill of the solid "Use Now" button; its label colour is on-primary (#ffffff). The extractor also reports #353535 as the fill beneath the "Download DingTalk" button, which additionally carries a blue-to-violet linear-gradient background image, so that button reads blue in the capture.
- **ink (#595959)** is a frequently read body grey; **ink-body (#878787)** is the most-read text colour (hero and section descriptions); **ink-strong (#212121)** colours headlines and card titles; **ink-charcoal (#393939)**, **ink-slate (#8697b4)** and **ink-muted (#9fa4b7)** are further measured text tones used for card captions and de-emphasised copy.
- **accent-blue (#0089ff)** is a measured text colour (111 characters on the page) and matches the blue eyebrow labels such as "Project Management" in the capture.
- **surface-card (#f5f9ff)** and **surface-tint (#f7f7ff)** are the pale blue and lavender section and card fills; **hairline (#edeff3)** is the measured border colour.
- **input-text (#000000)** is the colour of text typed into the phone field.

Other blues appear in the page's stylesheet corpus (for example #1b9aee, #1890ff, #1677ff) but they were not confirmed as painted on the first screen, so they are not tokenised.

## Typography

The body, button and display roles use one stack that starts with -apple-system, then system-ui, Segoe UI, Roboto, Helvetica Neue, PingFang SC, Noto Sans, Noto Sans CJK SC and Microsoft YaHei. The page also loads an icon font named tb-icons; "Glow Sans SC" and "Lucida Grande" appear among the font families measured on text.

- **display**: 60px, weight 700, line-height 74px, for the hero headline. On a 390px viewport it falls to 28px with 46px line-height (display-mobile).
- **heading**: 40px, weight 700, line-height 46px, set in a Lucida Grande-led stack, used for the section call-to-action title "Start using DingTalk Teambition".
- **body**: 16px, weight 400, line-height 25.12px.
- **button**: 16px, weight 600, line-height 16px.
- **input**: Arial, 16px, weight 400, line-height 22.8571px (the browser default form font, not a brand choice).

Size usage is dominated by 16px copy, with 14px and 12px for captions and 22px, 26px, 46px, 52px headings in feature sections.

## Layout

Content is centred, with the hero headline wrapped to four lines inside a column about 600px wide, illustrations flanking it on both sides, and a floating vertical support rail (Demo, Online Support, WeChat, DingTalk) pinned to the right edge. Feature sections alternate a text block on the left with a large product screenshot on the right. Spacing tokens measured from the page are 4px, 5px, 7px, 8px, 10px, 12px, 14px, 15px, 18px and 22px, with card bottom padding of 20px. Density is low to medium: copy is short, whitespace is large and every band carries one message.

## Elevation & Depth

Depth is soft and cool. The phone-number field carries a diffuse blue-white shadow, rgb(237, 241, 255) 0px 4px 16px 0px; two further measured shadows are rgba(209, 209, 228, 0.4) 0px 8px 24px 0px and rgba(120, 156, 255, 0.4) 0px 4px 12px 0px, all low-contrast and tinted blue or lavender rather than black. Screenshots are shown as floating windows with rounded corners and a gentle drop shadow. Cards rely mostly on their pale fill and large radius instead of borders.

## Shapes

Measured radii are 1px (xs), 8px (sm; the primary button), 10px (md; the Use Now button), 12px (lg; the phone field and link boxes), 16px (xl), 30px (2xl; feature cards) and a full 9999px pill, plus 50% for circular avatars and icons. The vocabulary moves from tight 8px controls to very soft 30px cards, which gives the page its friendly, bubble-like feel.

## Components

- **button-primary**: fill #353535, white label, 16px weight 600, 8px radius, padding 12px 18px, height 40px (the Download DingTalk CTA also layers a blue-to-violet gradient over this fill).
- **button-secondary** ("Use Now"): fill #353535, white 16px label at weight 400, 10px radius, height 50px, sitting flush inside the phone field.
- **text-input**: white fill, black Arial 16px text, 12px radius, padding 15px 30px 15px 24px, height 64px and a soft blue-white shadow; placeholder "Please enter your phone number".
- **card**: fill #f5f9ff, #212121 text, 30px radius, bottom padding 20px, with an industry title such as "Manufacturing" and a grey description.
- **link**: white box, 12px radius, 10px padding, label in the primary charcoal.
- **tab strip**: the three product tabs are pill-shaped with a pale grey fill on the active tab and a small coloured icon on each.

## Design System Architecture

Teambition publishes a design-system site, Clarity Design, at https://design.teambition.com. It was opened and describes itself as a guide, design tool and programming framework for Teambition's brand, lists a colour palette, fonts, a grid and spacing system and motion effects, and states it is "Powered by Alibaba Fusion Design". The page did not list token values, and nothing indicates the marketing site at www.teambition.com is built from it, so no values are taken from it; the numbers in this file all come from measuring the live page. The marketing page itself exposes only Swiper custom properties (a theme colour of #007aff and a navigation size of 44px) as root variables, so its de-facto system is utility-style class styling with a system font stack and a handful of repeated greys, blues and radii.

## Do's and Don'ts

- Do use charcoal #353535 for solid actions and keep the label white.
- Do keep headlines bold at 60px (desktop) with the near-black #212121 and descriptions in the lighter grey #878787.
- Do use #0089ff only for small eyebrow labels and highlights.
- Do round feature cards at 30px and controls at 8px to 12px.
- Don't use heavy black shadows; use pale blue-tinted ones.
- Don't treat the Arial form font as a brand face.
- Don't introduce warm accents; the page is cool blue, lavender and grey.
- Don't copy partner logos or the floating support rail as brand elements.

## Responsive Behavior

The hero display size reduces from 60px to 28px at a 390px viewport, with line-height going from 74px to 46px, so the four-line headline stays readable. The captured desktop layout has a left-aligned text column beside a screenshot; at narrow widths the text blocks are expected to sit full-width, but no mobile layout measurement beyond the h1 was taken, so other responsive behaviour is not specified. Touch targets: the 50px Use Now button and 64px input field are comfortably tappable.

## Iteration Guide

1. Begin with a white canvas and a pale lavender wash behind the hero.
2. Set the headline in bold 60px #212121 with 74px line-height, centred.
3. Place a 64px-high white input with a 12px radius and a soft blue shadow, with the charcoal Use Now button inside it at a 10px radius.
4. Introduce each feature with a small #0089ff eyebrow, a 40px bold title and a two-line #878787 description.
5. Build cards on #f5f9ff with 30px radii.
6. Verify any new colour against the measured list; if it is not there, describe it in words.
