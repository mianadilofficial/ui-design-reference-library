---
version: alpha
name: Manatal
category: "Thai Brands"
description: "Manatal AI recruitment software site at manatal.com: Montserrat 54px bold headlines with -1.6px tracking, #145aff 12px-radius buttons in Open Sans 600, pale blue #d4e8ff hero wash, navy #0f1f3d footer, floating screenshot panels with soft shadows."
colors:
  canvas: "#ffffff"
  ink: "#40454f"
  primary: "#145aff"
  on-primary: "#ffffff"
  surface-navy: "#0f1f3d"
  surface-sky: "#d4e8ff"
  surface-soft: "#f1f3f6"
  ink-strong: "#0d0e10"
  cta-green: "#1ebd53"
  ink-on-dark: "#ffffffcc"
  ink-pale: "#e1e4eb"
  ink-nav: "#04121f"
typography:
  display:
    fontFamily: Montserrat, sans-serif
    fontSize: 54px
    fontWeight: 700
    lineHeight: 56.7px
    letterSpacing: "-1.6px"
  display-mobile:
    fontFamily: Montserrat, sans-serif
    fontSize: 34px
    fontWeight: 700
    lineHeight: 35.7px
    letterSpacing: "-1.6px"
  heading:
    fontFamily: Montserrat, sans-serif
    fontSize: 38px
    fontWeight: 700
    lineHeight: 41.04px
    letterSpacing: "-0.8px"
  body:
    fontFamily: Montserrat, sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 32px
  button:
    fontFamily: "\"Open Sans\", sans-serif"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 19.2px
  nav:
    fontFamily: Inter, sans-serif
    fontSize: 15px
    fontWeight: 500
    lineHeight: 28.05px
rounded:
  xs: 8px
  sm: 10px
  md: 12px
  lg: 28px
  pill: 9999px
spacing:
  s1: 3px
  s2: 4px
  s3: 5px
  s4: 6px
  s5: 8px
  s6: 10px
  s7: 11px
  s8: 12px
  s9: 13px
  s10: 15px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 15px 10px
    height: 49px
  button-primary-hover:
    backgroundColor: "{colors.ink-strong}"
  nav:
    textColor: "{colors.ink-nav}"
  nav-link:
    textColor: "{colors.ink-nav}"
    typography: "{typography.nav}"
    rounded: "{rounded.xs}"
    padding: 11px 12px
  card:
    backgroundColor: "{colors.surface-soft}"
    textColor: "{colors.ink-strong}"
    rounded: "{rounded.md}"
    padding: 20px 13px 32px
    boxShadow: rgba(64, 69, 79, 0.06) 17px 17px 200px 0px
---

## Overview
The measured page is https://www.manatal.com/ (title "Leading AI Recruitment Software | Manatal.com", lang en, scroll height 11168px), the marketing home page of Manatal, a Thailand-founded applicant-tracking and recruitment CRM. The page is a Webflow site (webflow-icons font, Webflow-style variable names). It opens with a thin blue announcement bar ("Meet Manatal AI Interviewer, your recruiting agent to interview one or thousands of candidates simultaneously. Learn more"), a white navigation bar with the blue square-M logo and "Manatal" wordmark, an EN language flag, menu items (Features, Solutions, Resources, Integrations, Pricing), Sign In, a blue "Book a Demo" button and a green "Start for Free" button, then a pale-blue gradient hero: a bold left-aligned headline "Transform the way you recruit with AI." with a grey sub-paragraph, a green "Start 14-day Free Trial" button beside a blue "Book a Demo" button, two check-mark reassurances ("No credit card required", "2 minutes to get started"), and a product screenshot collage on the right. Below are a "Trusted by 10,000 recruitment teams in 135+ countries" caption over three rows of customer logos (Brother, Manpower, Cognizant, Tencent, Kelly, Toyota, Heineken, Sun Life, Ogilvy, Orange, NTT Data, KPMG, Hitachi, RE/MAX, Fujitsu, Randstad, Bosch and others), alternating feature sections with product UI screenshots and check-mark bullet lists, a job-board orbit diagram ("Post your jobs on 2,500+ Organic & Premium Channels") and further sections for AI screening and interviews. Copy is plain, benefit-led English with bold lead-in phrases.

## Colors
Canvas is {colors.canvas} (#ffffff); the hero sits on a pale blue wash, with measured light-blue surface #d4e8ff (area 1342) and soft grey #f1f3f6 (the --white-smoke variable, 630). Primary is #145aff, the fill of the "Book a Demo" button (white 16px label); hovering it changes the fill to #0d0e10 (rgb 13,14,16), measured. The second action, "Start for Free", is green (measured on hover in the extraction as rgb 30,189,83, #1ebd53). A deeper royal blue #0066ff (210) also appears as a surface. Dark navy #0f1f3d (1987) forms the footer and dark bands. Text: body ink #40454f (7242 characters), white (2756), near-black headings #0d0e10 (550), white at 80 percent #ffffffcc (177), #e1e4eb (112) and nav ink #04121f (52). Declared CSS variables include --gold #ffcb3d and --coral #ff7847 plus a color-scheme set (black/white); they are declared by the site but not seen in the measured components, so they are not used as tokens. Dark mode was not measured.

## Typography
Headings and body use Montserrat (weights 100 to 900, roman and italic loaded); buttons use Open Sans (600); navigation uses Inter (500); the mobile body measured Open Sans. Sizes by character weight: 18px (7993), 16px (1468), 15px (525), 24px (206), 14px (186), 20px (185). Weights: 400 (9203), 700 (1384), 600 (267), 500 (54). Tokens: display 54px / 56.7px weight 700 with -1.6px letter-spacing (the h1 "Transform the way you recruit with AI."); mobile display 34px / 35.7px; heading 38px / 41.04px weight 700 with -0.8px tracking; body 20px / 32px weight 400 in #40454f; button 16px / 19.2px weight 600; nav 15px / 28.05px weight 500. All of these fonts are open source.

## Layout
Page width 1280px. The hero is a two-column layout (text left about 500px wide, screenshot right), followed by logo grids in three rows of eight, then alternating text and screenshot sections in two columns. Plan cards in the pricing block measured 257px wide by 817px tall. Measured paddings: 28px (13), 15px (12), 32px (12), 75px (9), 10px (8), 12px (8); 75px padding was measured nine times. Sections are separated by pale tints rather than rules.

## Elevation & Depth
Two shadow styles were measured: a very wide, very soft `rgba(64,69,79,0.06) 17px 17px 200px 0px` on pricing cards, and a lifted `rgba(0,0,0,0.06) 0px 1px 6px 0px, rgba(0,0,0,0.16) 0px 2px 32px 0px` (used for the floating chat button and screenshot panels). Screenshot panels in the capture float over the gradient with rounded corners and a faint shadow.

## Shapes
Radii by weight: 12px (28, buttons and cards), 8px (17, nav links), 100% (13, circular icons), 50% (2), 28px (1), 10px (1). Tokens: xs 8px, sm 10px, md 12px, lg 28px, pill 9999px. Buttons use 12px radius.

## Components
Button-primary: #145aff fill, white Open Sans 16px weight 600 label, 12px radius, padding 15px 10px, 49px high (230px wide in the hero); hover fill #0d0e10. The green "Start for Free" button shares the shape and is #1ebd53 on hover as measured; its resting fill was not separately recorded. Nav-link: Inter 15px weight 500 in #04121f, 8px radius, 11px 12px padding, 50px high. Card: #f1f3f6, 12px radius, 20px 13px 32px padding, bold 17px / 24.48px title, wide soft shadow. Check-mark bullets use a green circled check icon, and text links are bold with a trailing arrow and an underline rule ("Try it For Free →"). The floating chat bubble at the lower right is a widget and is not a brand component.

## Design System Architecture
No public design system or brand guideline was found (no WebSearch was made; the page was measured through the extractor only). The shipped CSS is a Webflow project with a layered variable architecture: names such as --_primitives---colors--neutral-darkest, --_primitives---opacity--white-5, --_color-schemes---color-scheme-1--text/foreground/accent/border, --_ui-styles..., plus named brand variables --gold #ffcb3d, --coral #ff7847 and --white-smoke #f1f3f6. This describes the de-facto token structure: primitives (colors and opacities) feeding color schemes and UI styles.

## Do's and Don'ts
Do use #145aff for the primary demo action and a green for the free-trial action, both with 12px radius and 600-weight Open Sans labels. Do set headlines in Montserrat 700 with negative tracking (-1.6px at 54px). Do put product screenshots in floating rounded panels over the pale blue gradient. Don't use the --gold and --coral variables as UI colors unless re-measured in use. Don't document the chat bubble or the announcement bar as system components. Don't set body text in pure black; the measured body ink is #40454f.

## Responsive Behavior
The 390px mobile pass measured: h1 34px / 35.7px weight 700 (Montserrat); body 18px / 28.8px in Open Sans, 351px wide; the "Book a Demo" button stretches to 351px wide at the same 49px height, 12px radius and #145aff fill. Column collapse and navigation changes were not otherwise measured.

## Iteration Guide
1. Canvas #ffffff, ink #40454f, headings #0d0e10, primary #145aff, dark navy #0f1f3d. 2. Montserrat 54px / 700 headline with -1.6px tracking, 20px / 32px body. 3. 12px-radius buttons 49px high with Open Sans 600. 4. Pale blue #d4e8ff and grey #f1f3f6 section tints. 5. Floating screenshot panels with the 2px 32px soft shadow. 6. Resting green button color, focus states and dark mode were not measured.

## Notes on Measurement Scope
Values come from one desktop pass at 1280px and one mobile pass at 390px of the home page. The extractor found no secondary-button, link or text-input role. Pricing, blog and product pages, the logo set colors and the screenshots' internal UI were not measured. Manatal is described here as a Thailand-queue brand because it appears in the Thai-brands list; no statement about its origin comes from the measured page.

The hero tint, the button colors and the footer navy are the only brand-level surfaces confirmed by measurement; the logo wall is third-party imagery in each customer's own colors, and the orbit diagram of job-board marks is likewise third-party artwork, neither of which contributes tokens. Hover was recorded for the two header buttons and the hero buttons only; other interactive states are not measured.
