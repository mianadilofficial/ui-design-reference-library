---
version: alpha
name: Jobsdb Thailand
category: "Thai Brands"
description: "Thai job board Jobsdb (by SEEK): white canvas, magenta #e60278 primary action, navy-grey ink #2e3849 and slate #5a6881 text, SeekSans at 24px semibold display and 16px buttons, 8px to 24px radii and 2px inset ring outlines instead of drop shadows."
colors:
  canvas: "#ffffff"
  ink: "#5a6881"
  primary: "#e60278"
  on-primary: "#ffffff"
  surface-3: "#e6eaf2"
  ink-2: "#2e3849"
  ink-3: "#1d559d"
  ink-6: "#1e47a9"
typography:
  display:
    fontFamily: SeekSans, "SeekSans Fallback", Arial, Tahoma, sans-serif
    fontSize: 24px
    fontWeight: 600
    lineHeight: 33.792px
  display-mobile:
    fontFamily: SeekSans, "SeekSans Fallback", Arial, Tahoma, sans-serif
    fontSize: 22px
    fontWeight: 600
    lineHeight: 31.226px
  button:
    fontFamily: SeekSans, "SeekSans Fallback", Arial, Tahoma, sans-serif
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24.528px
  link:
    fontFamily: SeekSans, "SeekSans Fallback", Arial, Tahoma, sans-serif
    fontSize: 14px
    fontWeight: 600
    lineHeight: 20.962px
  input:
    fontFamily: SeekSans, "SeekSans Fallback", Arial, Tahoma, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24.528px
rounded:
  xs: 4px
  sm: 5px
  md: 8px
  lg: 16px
  xl: 24px
  pill: 9999px
spacing:
  s1: 4px
  s2: 6px
  s3: 8px
  s4: 11.74px
  s5: 12px
  s6: 13.72px
  s7: 16px
  s8: 17.74px
  s9: 20px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    height: 48px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    height: 48px
  link:
    textColor: "{colors.ink-2}"
    typography: "{typography.link}"
    rounded: "{rounded.xs}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-2}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.md}"
    padding: 11.736px 16px 11.736px 46px
    height: 48px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-2}"
    rounded: "{rounded.xl}"
    boxShadow: rgb(234, 236, 241) 0px 0px 0px 2px inset
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-2}"
---

## Overview

Jobsdb Thailand (https://th.jobsdb.com/) is the Thai edition of the Jobsdb job board; the logo reads "jobsdb by seek" and the page title is "งานในประเทศไทย | Jobsdb - พบงานที่ใช่ ได้ดีกว่าที่เคย" (jobs in Thailand, find the right job better than ever). The measured page is declared lang th, 1280px wide and 2219px tall with 813 visible elements, so it is a compact landing page rather than a long scroll.

From the top: a pale blue notice bar about terms of service and privacy (with a close icon), a white header with the logo, four nav items (ค้นหางาน, ค้นหาโปรไฟล์, ครบเครื่องเรื่องงาน, บริษัท), a language selector, an outlined "เข้าสู่ระบบ" (sign in) button in blue and a text link "ผู้ประกอบการเข้าสู่ระบบ" (employer sign in). Under it is a deep navy search band (#051a49) holding a keyword field, a location field and a magenta "หางาน" (search) button. Next is a "ค้นหาผู้ประกอบการที่เหมาะกับคุณ" (find employers that suit you) carousel of company cards with logo, name and open-job count, followed by two large promotional panels (one magenta with a portrait, one grey-lilac with a phone illustration about SEEK Pass), a block of quick-search link lists (job types, major cities, others), a four-column footer and a legal line crediting the operating company.

At capture time a login dialog ("เข้าสู่ระบบเพื่อเจองานที่ใช่", with Google and email buttons and decorative blue, navy and magenta shapes) opened over the page with a half-opaque dark scrim (#00000080). The extraction was re-run once and still contains it. The dialog and scrim are not documented as brand UI; the dialog does show the brand's shape language of quarter circles and a ring in navy and magenta.

The voice is friendly and direct, written in everyday Thai, with warm illustration and portrait photography.

## Colors

- **canvas #ffffff** is the page, header and footer background (weight 2117).
- **primary #e60278** is the Jobsdb magenta, the fill of the "หางาน" search button and the SEEK Pass call to action (254), and the large promo panel; **on-primary #ffffff** is the text on it.
- **surface-3 #e6eaf2** is a cool grey panel (237).
- **ink #5a6881** is the most-read text color (915 weighted characters), a slate blue-grey for secondary copy and input text. **ink-2 #2e3849** (741) is the dark navy-grey for headings, nav and links.
- **ink-3 #1d559d** (268) is the blue used for sign-in and links, and **ink-6 #1e47a9** (34) is the darker blue text of the tinted sign-in button.
- Other measured backgrounds, not promoted to tokens: #e3f2fb (the pale blue notice bar and info tint), #051a49 (navy search band) and #f3f5f7 (light grey chips).
- Borders: #2e3849 (3 uses); card outlines use #eaecf1 drawn with an inset shadow instead of a border.

The root variables were empty in the measurement (the site's styling is delivered as compiled class styles), so no named palette is available.

## Typography

One brand family, "SeekSans", loaded with normal and 500 to 700 weights and a metric-matched "SeekSans Fallback", then Arial, Tahoma and sans-serif for Thai coverage. It carries 2006 weighted characters.

- **display** 24px / 33.792px, weight 600 (headings such as "ค้นหาผู้ประกอบการที่เหมาะกับคุณ").
- **display-mobile** 22px / 31.226px, weight 600.
- **button** 16px / 24.528px, weight 600.
- **link** 14px / 20.962px, weight 600 (e.g. "ลงทะเบียนได้ที่นี่").
- **input** 16px / 24.528px, weight 400.

The scale is small and flat: there is no oversized hero heading; hierarchy is semibold versus regular and navy-grey versus slate. SeekSans is the brand's own font; for prototypes substitute a humanist sans with Thai support.

## Layout

A single centered column 1280px wide. The header, notice bar and footer span the width. The search band places two fields and a button in one row. Company cards sit in a horizontal carousel with pagination dots and a chevron at the right; two promo panels sit side by side with rounded corners; the quick-search section is a label column plus wrapped underlined links; the footer is four equal columns (ผู้หางาน, ผู้ประกอบการ, เกี่ยวกับเรา, ติดต่อเรา).

Spacing tokens measured: 4px, 6px, 8px, 11.74px, 12px, 13.72px, 16px, 17.74px, 20px and 24px. Buttons and inputs are 48px high; the text input has padding 11.736px 16px 11.736px 46px (room for a leading icon).

## Elevation & Depth

The system avoids drop shadows. The three measured box shadows are all inset 2px rings: rgb(234, 236, 241) (17 uses) as card and field outlines, rgb(46, 56, 73) (2) as a strong outline and rgb(30, 71, 169) (1) as the blue outlined sign-in button. Depth otherwise comes from filled panels and tints (#e6eaf2, #e3f2fb, #f3f5f7) and the scrim under the dialog.

## Shapes

Radii measured: 8px (weight 50), 4px (23), 16px (16), 9999px (8), 24px (4), 5px (1). Tokens: xs 4px, sm 5px, md 8px, lg 16px, xl 24px, pill 9999px. Buttons and inputs are 8px; small links 4px; cards 24px; promo panels 16px; and the pagination dots and avatar circles are fully round.

## Components

- **button-primary** and **button-secondary**: magenta (#e60278) fill, white text, 16px semibold, 8px radius, 48px height.
- **tinted buttons** (seen in candidates): #ebeff2 with navy text for "ดำเนินการต่อด้วยอีเมล" and "ดูเพิ่มเติม", and #e4f1fd with blue #1e47a9 text for sign-in, all 8px radius.
- **link**: navy (#2e3849) 14px semibold, 4px radius, underlined in the quick-search lists.
- **nav**: white, #2e3849 text at 14px semibold; the active item is underlined in the capture.
- **text-input**: white, #5a6881 text, 8px radius, 48px height with a leading icon gutter.
- **card**: white, 24px radius, 2px inset #eaecf1 outline.
- **footer**: white with navy-grey text.

Hover was recorded on the "ค้นหาโปรไฟล์" nav link: text color changes from rgb(90, 104, 129) to rgb(46, 56, 73), no other properties changed.

## Design System Architecture

No public design system for Jobsdb Thailand is linked from the home page, so none is cited. The measured root variables are empty; styling is therefore not exposed through custom properties in the page. The identifiable system elements are the SeekSans font family with a "SeekSans Fallback" face, consistent 8px/24px radii, a magenta and navy palette and the inset-ring convention for outlines. The legal line at the foot names the operating company and the "SEEK Pass" product appears in promo copy. Source: the measured extraction in web/data/extracted/jobsdb-thailand.json from https://th.jobsdb.com/.

## Do's and Don'ts

- Do use magenta #e60278 for the single primary action and promo panels, and navy-grey #2e3849 for headings.
- Do outline cards with a 2px inset ring in #eaecf1 instead of using shadows.
- Do round buttons and inputs at 8px and cards at 24px.
- Do set everything in SeekSans: 600 for headings, buttons and links; 400 for inputs.
- Do pair the magenta with navy (#051a49) and tinted blue surfaces.
- Don't add drop shadows; none were measured.
- Don't document the login dialog, notice bar close icon or scrim as brand tokens.
- Don't use the default Times serif that appears on unstyled logo text as a brand font.

## Responsive Behavior

Measured in the 390px mobile pass: the h1 is 22px (down from 24px); no body text size was recorded. Layout changes for nav, search, carousel and footer were not measured.

## Iteration Guide

1. White canvas, #2e3849 headings and #5a6881 secondary text.
2. One magenta 8px button at 48px height per view.
3. Cards at 24px radius with a 2px inset #eaecf1 outline.
4. Use tinted blue (#e3f2fb) for notices and #e6eaf2 for neutral panels.
5. Choose spacing from the ten measured steps.
6. Run `node web/scripts/verify-designs.mjs --slug=jobsdb-thailand`.
