---
version: alpha
name: FlowAccount
category: "Thai Brands"
description: "FlowAccount Thai online accounting site at flowaccount.com: Prompt 38px h1 and Chat Thai UI body, #66bd00 sign-up button with 5px radius, #2898cb brand blue outlines and numerals, #f8f9fb canvas with white and #e9f5fa bands, 20px cards with a 10px soft shadow."
colors:
  canvas: "#e9f5fa"
  page-body: "#ffffff"
  page-largest: "#f8f9fb"
  ink: "#646e7a"
  primary: "#66bd00"
  on-primary: "#ffffff"
  brand-blue: "#2898cb"
  ink-heading: "#353d48"
  ink-dark: "#2e3642"
  ink-slate: "#485567"
  link: "#555555"
  primary-hover: "#1a84b5"
typography:
  display:
    fontFamily: Prompt, sans-serif
    fontSize: 38px
    fontWeight: 500
    lineHeight: 57px
  display-mobile:
    fontFamily: Prompt, sans-serif
    fontSize: 34px
    fontWeight: 500
    lineHeight: 51px
  heading:
    fontFamily: cs_chatthaiuiregular
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22.72px
  subheading:
    fontFamily: Prompt, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 22.72px
  body:
    fontFamily: cs_chatthaiuiregular
    fontSize: 13px
    fontWeight: 400
    lineHeight: 20.8px
  button:
    fontFamily: cs_chatthaiuiregular, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 25.56px
  link:
    fontFamily: cs_chatthaiuiregular, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 16px
rounded:
  xs: 3px
  sm: 5px
  md: 8px
  lg: 10px
  xl: 20px
  2xl: 30px
  3xl: 50px
  pill: 9999px
spacing:
  s1: 1px
  s2: 4px
  s3: 5px
  s4: 6px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 14px
  s9: 15px
  s10: 18px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.page-body}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 10px 40px
    height: 48px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  link:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.link}"
    typography: "{typography.link}"
    padding: 13px 20px
    boxShadow: rgba(6, 6, 6, 0.14) 2px 2px 10px 0px
  card:
    textColor: "{colors.ink}"
    rounded: "{rounded.xl}"
    boxShadow: rgba(32, 32, 32, 0.1) 0px 0px 10px 0px
  footer:
    textColor: "{colors.page-body}"
---

## Overview
The measured page is https://flowaccount.com/ (title "FlowAccount โปรแกรมบัญชีออนไลน์ สำหรับ SMEs ฟรีทุกฟังก์ชั่น 30 วัน", lang th, scroll height 14621px), the Thai home page of FlowAccount, an online accounting program for small businesses. The first screen has a slim white top strip (a phone icon with "คุยและปรึกษานักบัญชีได้ทุกวัน: 02-026-8989", a login link and a UK flag for the English site), a white main bar with the blue FLOWACCOUNT wordmark and a growth-arrow logo, a menu (ผลิตภัณฑ์, ฟังก์ชั่น, ราคา, บริการ, ร่วมเป็นพาร์ตเนอร์, แหล่งเรียนรู้, ติดต่อเรา) and two buttons: a filled green "สมัครใช้งานฟรี" and an outlined blue "นัดสาธิตการใช้งาน". The hero is a very light grey-blue wash: a left column with the h1 "โปรแกรมบัญชี ออนไลน์ ใช้งานง่าย สำหรับนักธุรกิจยุคใหม่", five check-circle bullets, a Google rating line (4.9 with five stars and 3,034 reviews), the two buttons repeated, social sign-up icons (Facebook, Google, Apple) and, on the right, a laptop and phone dashboard mockup with App Store and Google Play badges. Below are an "AI Connector (MCP)" panel with Claude, ChatGPT and Grok marks and a blue "ดูวิธีการเชื่อมต่อ" button, a stats row with italic blue numerals (160,000+ users, 17,000+ accountants, 6000+ accounting offices), a pale-blue video-tutorial section, and feature pills with a tabbed feature showcase. A floating chat bubble at the right is a widget and not brand UI. The voice is friendly and reassuring, with short bullets that promise speed and ease.

## Colors
The measured backgrounds by area are #f8f9fb (6051, the largest), white (3744), brand blue #2898cb (1487, buttons, the AI banner button, stat figures), pale blue #e9f5fa (546, the generated canvas for the tutorial band) and #f0f2f7 (78) and #d8f0fa (20). Primary is #66bd00, the green fill of the "สมัครใช้งานฟรี" button with white 18px text; the token primary-hover #1a84b5 is carried from the generator's hover measurement, and the page's hover record itself lists only the call tab. Text: #646e7a (4854 characters, the generated ink for body copy), #353d48 (2161, headings and the h1), white (1217), blue #2898cb (1052), #2e3642 (613) and #485567 (298). Links in the floating call tab are #555555. Borders: #2898cb (9), #4fc0e8bd (5), #c7ced6 (5), #e8e7e6 (4). The CSS declares --color_navy_1e #1e2a3b, --color_orange_fea #fea000 and --color_gray_eb #ebebeb as site palette variables and Bootstrap defaults --pink #e83e8c, --success #28a745, --red #dc3545; the Bootstrap defaults are not brand colors. Dark mode was not measured.

## Typography
The text face is `cs_chatthaiuiregular` (400) for body copy, buttons and links, with Prompt (400, 500, 600) for headlines and `cs_prakasregular` loaded as a secondary face; Font Awesome 5 supplies icons. Sizes by character weight: 16px (4612), 15px (2667), 18px (818), 12px (758), 36px (396), 13px (357). Weights: 400 (7769), 500 (2435), 700 (138), 600 (78). Tokens: display 38px / 57px weight 500 in Prompt (the h1; mobile 34px / 51px); heading 16px / 22.72px in Chat Thai UI; subheading 16px weight 500 in Prompt; body 13px / 20.8px; button 18px / 25.56px; link 16px. The fallback after `cs_chatthaiuiregular` in the button and link stacks is generic sans-serif; licensing of the face was not checked.

## Layout
Page width 1280px. The hero is a two-column layout (text about 652px wide, mockup right), the AI panel is a wide rounded card with an illustration at right, the stats band is a three-column row separated by thin vertical rules, and later sections alternate white, #f8f9fb and pale blue bands. The site's own variable names include a narrow container (--fa-sys-container-narrow, set from --fa-ref-size-912, i.e. a 912px container) and an iPad media-query width variable (--media_menu_ipad 990px). Measured paddings: 20px (50), 10px (48), 18px (39), 5px (26), 15px (17), 1px (15).

## Elevation & Depth
Shadows measured: `rgba(32,32,32,0.1) 0px 0px 10px 0px` on cards (the generated card shadow), `rgba(32,32,32,0.05) 0px 0px 10px 0px`, `rgba(0,0,0,0.1) 0px 0px 20px 0px`, `rgba(99,99,99,0.2) 0px 2px 8px 0px`, and `rgba(6,6,6,0.14) 2px 2px 10px 0px` on the call tab (it changes to `rgba(0,0,0,0.16) 2px 4px 16px 0px` on hover). The header has a soft drop shadow and the mockups float with a faint shadow. The AI panel is a pale grey rounded card with a subtle shadow.

## Shapes
Radii by weight: 50% (49, round icons and avatars), 5px (24, buttons), 50px (23, feature pills), 10px (14), 5px top-only (8, tab-like cards), 8px (5). The call tab uses 0 0 12px 12px (a bottom-rounded tab). Cards use 20px. Tokens: xs 3px, sm 5px, md 8px, lg 10px, xl 20px, 2xl 30px, 3xl 50px, pill 9999px. Buttons use 5px.

## Components
Button-primary: #66bd00 fill, white label at 18px / 25.56px, 5px radius, padding 10px 40px, 48px high, 190px wide ("สมัครใช้งานฟรี"). Button-secondary (outlined, measured as cta2): white fill, #2898cb label at 16px and 1px #2898cb border, 5px radius, padding 8px 12px, 40px high, 146px wide ("นัดสาธิตการใช้งาน"). Link/call tab: white, #555555 16px label, 13px 20px padding, bottom radius 12px, a soft shadow. Card: 20px radius, 10px soft shadow. Feature pills: 50px radius, outlined or tinted. Footer: white text on a dark surface (the token output records footer text only). The hero's check-circle bullets use pale-blue circles with blue ticks.

## Design System Architecture
No public design system or brand guideline was found (no WebSearch was made; the page was measured through the extractor only). The shipped CSS exposes the company's own layered token naming: `--fa-ref-size-*` reference sizes (e.g. --fa-ref-size-9, -25, -32, -60, -173), `--fa-sys-*` system tokens that reference them (--fa-sys-container-narrow, --fa-sys-text-lead = size 20, --fa-sys-space-2-5 = size 10, --fa-sys-tracking-wide = size 1, --fa-sys-color-on-action tied to --app_color_register_text), plus legacy palette variables (--color_navy_1e, --color_orange_fea, --color_gray_eb) and Bootstrap defaults. This is a reference-to-system token ladder defined in the page's own CSS, with no public documentation found.

## Do's and Don'ts
Do use green #66bd00 for the primary sign-up action and blue #2898cb for outlined, informational and numeric accents. Do set the hero h1 in Prompt 500 at 38px and body in Chat Thai UI at 13px to 16px. Do keep buttons at 5px radius and feature chips at 50px. Do float dashboard mockups over pale grey-blue washes. Don't use Bootstrap's --pink, --success or --red as brand colors. Don't document the floating chat bubble, the cookie or chat widgets, or the rating badge as UI components. Don't use pure white backgrounds across the whole page; the canvas alternates #f8f9fb and white.

## Responsive Behavior
The 390px mobile pass measured: h1 34px / 51px weight 500 in Prompt, 330px wide and 204px tall; the "สมัครใช้งานฟรี" button 160px wide by 45px high with 16px / 22.72px text and 10px padding and the same #66bd00 fill and 5px radius; font sizes by character weight 16px (4313), 18px (781), 26px (585), 12px (483). Column collapse and menu behaviour were not otherwise measured.

## Iteration Guide
1. Canvas #f8f9fb and white; ink #646e7a for body, #353d48 for headings; blue #2898cb; green #66bd00. 2. Prompt 38px / 500 h1; body 13px to 16px in a Thai UI face. 3. 5px-radius buttons 48px high (green) and 40px (outlined blue). 4. Cards at 20px radius with a 10px soft shadow. 5. Italic blue stat numerals over thin dividers. 6. Hover for the green button, focus states and dark mode were not measured.

## Notes on Measurement Scope
Values come from one desktop pass at 1280px and one mobile pass at 390px of the home page. Pricing, product pages, the web app itself and the English site were not measured. The extractor found no nav, text-input or h-level role beyond those quoted; the footer was recorded as a text-colour token only.
