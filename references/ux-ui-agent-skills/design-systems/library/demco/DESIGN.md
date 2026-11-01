---
version: alpha
name: DEMCO
category: "Thai Brands"
description: "Thai investor and corporate site of DEMCO Public Company Limited (power and infrastructure engineering), set entirely in Prompt (42px bold uppercase display with 2px tracking, 16px body), with gold #bb9f4b links, deep purple #5f2c6b panels and footer, near-black #1d1d1d ink on white and #f8f8f8 bands."
colors:
  canvas: "#ffffff"
  ink: "#1d1d1d"
  primary: "#bb9f4b"
  on-primary: "#ffffff"
  surface-light: "#f8f8f8"
  brand-purple: "#5f2c6b"
  ink-olive-grey: "#59584f"
typography:
  display:
    fontFamily: Prompt, sans-serif
    fontSize: 42px
    fontWeight: 700
    lineHeight: 42px
    letterSpacing: 2px
    textTransform: uppercase
  display-mobile:
    fontFamily: Prompt, sans-serif
    fontSize: 28px
    fontWeight: 600
    lineHeight: 42px
  body:
    fontFamily: Prompt, sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 26px
  nav:
    fontFamily: Prompt, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 26px
rounded:
  xs: 4.8px
  pill: 9999px
spacing:
  s1: 4px
  s2: 8px
  s3: 10px
  s4: 15px
  s5: 16px
  s6: 18.4px
  s7: 24px
  s8: 32px
  s9: 40px
  s10: 48px
components:
  link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
  nav:
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
  footer:
    backgroundColor: "{colors.brand-purple}"
    textColor: "{colors.canvas}"
---

## Overview

DEMCO is the Thai home page (`https://www.demco.co.th/th/home`) of **บริษัท เด็มโก้ จำกัด (มหาชน)**, DEMCO Public Company Limited, an engineering company serving power, clean-energy and utility systems from Pathum Thani. The address `https://www.demco.co.th/` first serves an entry page for a 13 October tribute with "เข้าสู่หน้าหลัก" and "Enter Site" links, so the real home page was measured instead. The page text states the hero message "เป็นผู้ผลิตและจัดหาพลังงานสะอาด ระบบไฟฟ้า และสาธารณูปโภค ด้วยนวัตกรรมและเทคโนโลยี" and lists the core values under the acronym IDEMCO.

The capture shows a dark, purple-black space-like hero with a transparent header: a gold-and-black striped DEMCO logo tile at the left, nine white Prompt links centred (เกี่ยวกับเรา, ธุรกิจของเรา, นักลงทุนสัมพันธ์, การกำกับดูแลกิจการที่ดี, การพัฒนาความยั่งยืน, ข่าวและกิจกรรม, ร่วมงานกับเรา, ติดต่อเรา) and an EN switch with a search icon in a purple box at the right. Over the hero two white announcement cards (an AGM checklist award and an invitation to nominate directors) and a slide counter "3 / 4" are visible; these are slider and announcement content with a dark overlay. Below, a pale band reads "สำรวจธุรกิจของเรา" in small purple, then "มุ่งมั่นให้บริการที่ดี มานานกว่า" and a huge "30 ปี" in bold black. A three-photo strip (service business, trading business, project development and investment) carries white underlined captions. A purple investor-relations panel shows the stock data (DEMCO, price 3.48 THB, previous close 3.42, volume 127,220) in white and gold; beside it a "กิจกรรมล่าสุด" panel and a gold "เอกสารดาวน์โหลด" panel with download icon buttons. A light band lists securities-market announcements with gold dates.

Voice is formal Thai corporate language with short labels, numerals shown very large ("30 ปี"), and underlined white links ending in a chevron.

## Colors

`canvas` is #ffffff; `surface-light` #f8f8f8 (600 area weight) is the pale band behind the "30 ปี" block and announcements. `ink` #1d1d1d (192 characters) and #000000 (150 characters) are the dark text; `ink-olive-grey` #59584f colours the IDEMCO heading (53 characters). `brand-purple` #5f2c6b is a large measured background (822 weight) used for the investor panel, the latest-activities panel and the footer, and also appears as small label text (35 characters). `primary` #bb9f4b, a muted gold, is the colour of the nav-link anchors, the dates in the announcement list and the fill of the download-documents panel (613 weight) and its text elements (34 characters). `on-primary` #ffffff is the white text on the purple and gold panels and the hero (2367 characters, the most-read colour).

A black measured area covering the viewport (#000000, 1024 weight) is the scrim behind the announcement overlay and is not a brand colour; it was not tokenised. The close icon (×) and the cookie control at the lower left are overlay controls, not brand components.

## Typography

One family is used: Prompt (400, 600, 700 loaded; 2831 measured characters), declared as `Prompt, sans-serif`. Font Awesome 5 Pro, Font Awesome 5 Brands and an "icomoon" icon font supply icons. Latin and Thai text on the page share this one family, so headings, numerals, stock tickers and body copy all keep the same letterform style.

Measured scale: `display` 42px / 42px at 700, uppercase with 2px letter-spacing (the "IDEMCO" values heading, 149 characters); `display-mobile` 28px / 42px at 600 at 390px; `body` 16px / 26px at 700 (the measured body paragraph sits white on photography in bold); `nav` 16px / 26px at 400. Other sizes: 26px (494 characters), 17px (314), 20px (274), 14px (221), 36px (79). Weights 600 (1204 characters), 400 (1034) and 700 (568) are balanced; 16px text with 1px letter-spacing is used on 68 characters (buttons and labels).

## Layout

The page is 1280px wide and 3779px tall. The header is transparent over the hero. Content bands are full width: a text band with a left-aligned column, a three-column photo strip with equal widths, a purple panel (investor stock data in a three-column grid) next to a narrower panel pair stacked (activities over downloads), and a light announcements list. Measured paddings: 15px (28 uses), 8px, 48px (10), 16px and 32px; gap 16px.

## Elevation & Depth

Only one shadow was measured: `rgba(204, 204, 204, 0.5) 0px 2px 10px 0px`. The design is flat; depth comes from the dark gradient hero, photo overlays that darken the lower edge for captions and the colour blocks of purple and gold.

## Shapes

Radii measured: 4.8px (one element) and 999px (one pill element, the "ดูเพิ่มเติม" button inside the announcement card in the capture is pill-shaped). Photographs, panels and bands are square-edged.

## Components

**Underlined link.** White (or black on light bands) Prompt text with a 1-2px underline and a chevron or arrow after it, used for "อ่านเพิ่มเติม", "กิจกรรมทั้งหมด", "นักลงทุนสัมพันธ์", "ดาวน์โหลดเอกสารนักลงทุน".

**Navigation.** White 16px Prompt at weight 600 over the hero; a gold link colour (#bb9f4b) at 400 for anchor elements.

**Stock panel.** Purple #5f2c6b; ticker in gold 42px-class numerals, values in white, small labels in white, a hairline divider and an "updated" line.

**Download list.** Gold #bb9f4b panel, white bold 14-16px titles and square white-outlined download icon buttons.

**Photo strip.** Three equal photographs, each with a white underlined caption on a dark lower gradient.

**Footer.** `brand-purple` background with white 14px text and the company address (59 หมู่ 1 ... Pathum Thani).

## Design System Architecture

No public design system, brand guideline or press kit is linked from the page read (https://www.demco.co.th/th/home). The stylesheet is Bootstrap 4 based (standard --primary #007bff, --blue and breakpoints 576px, 768px, 992px and 1200px are declared) with brand styling in component CSS: Prompt only, purple and gold blocks, large numerals and underlined links. The Bootstrap variables are framework defaults and are not used as brand tokens.

## Do's and Don'ts

- Do pair purple #5f2c6b panels with gold #bb9f4b panels and white text.
- Do show headline numbers (30 ปี, prices) very large in bold Prompt.
- Do use underlined links with an arrow rather than filled buttons.
- Don't use Bootstrap blue #007bff as a brand colour.
- Don't copy the announcement overlay, its black scrim or the cookie control as brand UI.
- Don't add shadows; the page is flat except for one 0.5-alpha grey shadow.

## Responsive Behavior

Measured at 390px: the lead paragraph renders at 28px / 42px at weight 600, the IDEMCO heading at 22px / 22px at 700 with 2px tracking, and body text keeps 16px. The mobile pass reports 3 header links visible, a visible "Toggle navigation" menu button, and a maximum of 2 card columns. Other reflow (panel stacking, hero) was not measured.

## Iteration Guide

The guide below restates the measured rules so a new page can be assembled without re-reading the whole file; every number repeats a frontmatter value.

1. Keep Prompt as the only family on every surface, light or dark; headings 700 with 2px tracking uppercase, body 16px / 26px.
2. Use purple #5f2c6b for data panels and footer, gold #bb9f4b for download and accent elements.
3. Build lists as underlined link rows with a trailing arrow.
4. Re-measure with overlays closed if exact hero values are needed.
5. Run `node web/scripts/verify-designs.mjs --slug=demco` after edits.
