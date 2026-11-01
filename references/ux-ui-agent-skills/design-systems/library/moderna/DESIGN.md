---
version: alpha
name: "Moderna"
category: "Pharma"
description: "Moderna corporate site (modernatx.com) in deep blue ink #053f68 on pale blue canvas #f8fdff with a dark teal #083952 footer, Aeonik at 40px bold headings and 18px body, 12px-radius white cards with soft layered shadows and a red #d1343e accent."
colors:
  canvas: "#f8fdff"
  ink: "#053f68"
  primary: "#e7f3f8"
  on-primary: "#053f68"
  surface-2: "#ffffff"
  surface-3: "#083952"
  ink-2: "#376586"
  ink-3: "#ced7dc"
  ink-4: "#507995"
  accent-red: "#d1343e"
typography:
  display:
    fontFamily: Aeonik, Arial, sans-serif
    fontSize: 40px
    fontWeight: 700
    lineHeight: 48px
  subheading:
    fontFamily: Aeonik, Arial, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 32px
  button:
    fontFamily: Arial
    fontSize: 16px
    fontWeight: 400
    lineHeight: 28px
  nav:
    fontFamily: Aeonik, Arial, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  link:
    fontFamily: Aeonik, Arial, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 16px
rounded:
  xs: 2px
  sm: 3px
  md: 8px
  lg: 10px
  xl: 12px
  2xl: 16px
  pill: 9999px
spacing:
  s1: 1px
  s2: 4px
  s3: 5px
  s4: 6px
  s5: 8px
  s6: 12px
  s7: 16px
  s8: 19px
  s9: 20px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 4px 16px
    height: 36px
  button-secondary:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    rounded: "{rounded.sm}"
    padding: 1px 6px
    height: 57px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    rounded: "{rounded.sm}"
  nav:
    textColor: "{colors.primary}"
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
    rounded: "{rounded.sm}"
  card:
    backgroundColor: "{colors.surface-2}"
    textColor: "{colors.ink}"
    rounded: "{rounded.xl}"
    padding: 24px 20px 24px 32px
    boxShadow: rgba(0, 0, 0, 0.02) 0px 2px 24px 0px, rgba(6, 34, 49, 0.08) 0px 8px 28px 0px
  footer:
    backgroundColor: "{colors.surface-3}"
    textColor: "{colors.ink-3}"
    padding: 24px 0px
---

# Moderna

## Overview
The measured site is www.modernatx.com (page title "Pioneering mRNA technology - Moderna", language en-US). It is the corporate home of an mRNA medicines company, and it serves four audiences from one page: the public (The Power of mRNA, Research, Responsibility, Products), job seekers (Careers, "Job Opportunities", dated job cards), investors and media (Investors, Newsroom, Blogs) and health care professionals (a separate link marked with an external-link icon). A dark teal utility bar at the top carries mRNA Pipeline, Careers, Newsroom, Blogs, Moderna Supplier Page, Health Care Professionals, Investors and Clinical Trials. Under it is the main bar with the red "moderna" wordmark with a dashed underline, five primary links, a country selector (USA / English) and a red outlined search icon.

The page is a sequence of airy, light-blue-white bands. A carousel with slide indicators opens the page (the capture shows a heading about Phase 3 topline results), then a large white "Latest News" card with a photograph, a row of job cards with a left blue rule, a statistics strip (for example "36 Ongoing clinical trials" in large light blue numerals) and a "Join us and change the world of medicine" card. The mood is scientific but friendly: soft, clean, restrained blue, human photography of lab staff and office conversations, and rounded cards.

## Colors
The ground is `{colors.canvas}` (#f8fdff, 5120 weighted area), with `{colors.surface-2}` white (#ffffff) for cards, `{colors.surface-3}` deep teal (#083952) for the footer and utility bar, and `{colors.primary}` pale blue (#e7f3f8) for the one filled button. Text uses `{colors.ink}` (#053f68, the main heading and body-strong color, 1118 weighted characters), `{colors.ink-2}` (#376586) for paragraphs (805), `{colors.ink-4}` (#507995) for subheads (148), `{colors.ink-3}` (#ced7dc) for footer text on teal (202) and `{colors.on-primary}` (#053f68) on the pale-blue button.

`{colors.accent-red}` (#d1343e) is the only warm color: a red used for borders (7 weighted occurrences), the circular arrow icons next to action links such as "VIEW PRESS RELEASES" and "LIFE AT MODERNA", the search icon and the wordmark. It is renamed from the generator's hairline key because its measured role is the brand red accent as well as a border color. A light blue (#5793bf) appears on a few text runs, as in the large statistics numerals. The only :root variable measured is `--swiper-theme-color` #007aff, a carousel library default, so it is not a brand color.

## Typography
The typeface is Aeonik with Arial and sans-serif as fallbacks, loaded at weights 400, 500 and 700 (2451 weighted characters); Arial is used on the filled button (27 characters). The site's own fallback is Arial, so Arial is the documented substitute; no foundry source for Aeonik was opened.

Scale: `{typography.display}` is 40px weight 700 with 48px line-height (h1 and h2 such as "Latest News"); `{typography.subheading}` is 18px weight 400 with 32px line-height (subheads and paragraphs); `{typography.button}` is Arial 16px weight 400 with 28px line-height; `{typography.nav}` is 14px weight 400 with 20px line-height; `{typography.link}` is 16px weight 500 with 16px line-height. By characters read: 18px (1094), 16px (954), 14px, 40px, 32px, 19.2px, 48px and a 80px display size on 7 characters. Weights: 400 (1265), 700 (763), 500 (450). No letter-spacing was measured, and action links are upper-case words ("VIEW PRESS RELEASES").

## Layout
The desktop page is 1280px wide and 4736px tall. A 97px nav block spans the full width; content is arranged in wide bands with a left-aligned text column and a right-hand image or card. Job cards are 400px wide and 164px tall with 24px 20px 24px 32px padding. Padding values by frequency: 4px, 8px, 16px, 19px, 53.248px, 32px, 1px, 6px, 24px and 64px; gaps measured are 20px, 24px, 32px, 40px and 48px. The spacing tokens `{spacing.s1}` to `{spacing.s10}` list 1px to 24px steps. Generous vertical whitespace separates sections; the h1 block has 64px top padding.

## Elevation & Depth
Cards use a two-layer shadow measured on 10 elements: `rgba(0, 0, 0, 0.02) 0px 2px 24px 0px, rgba(6, 34, 49, 0.08) 0px 8px 28px 0px`, a diffuse blue-tinted shadow with a very faint ambient layer. One larger shadow, `rgba(0, 0, 0, 0.3) 0px 0px 60px 0px`, appears once. Everything else is flat. Depth therefore reads as white cards floating softly over a pale blue ground.

## Shapes
Measured radii: 3px on 35 elements (`{rounded.sm}`, links and nav items), 16px, 8px and 12px on 13 each (`{rounded.2xl}`, `{rounded.md}`, `{rounded.xl}`), 2px on 11 (`{rounded.xs}`), 10px on 3 (`{rounded.lg}`), 50% on 4 (`{rounded.pill}`, circles) and a few side-specific values such as 12px 0px 0px 12px for the image edge of a split card. The filled button has an 8px radius, and cards a 12px radius.

## Components
**Primary button** (`{components.button-primary}`): pale blue (#e7f3f8) fill, #053f68 text, Arial 16px, padding 4px 16px, 36px tall, 8px radius ("Job Opportunities"). **Text actions** (`{components.button-secondary}`, `{components.link}`): #053f68 Aeonik 16px weight 500, 3px radius, upper-case with a red circular arrow icon; no fill. **Navigation** (`{components.nav}`, `{components.nav-link}`): #e7f3f8 14px text on the teal utility bar, 3px radius links. **Job card** (`{components.card}`): white background, #053f68 18px bold title, 12px radius, 24px 20px 24px 32px padding, the two-layer shadow above, and a blue left rule. **Footer** (`{components.footer}`): #083952 background, #ced7dc 16px text, 24px vertical padding, 124px tall, with links Terms of use, Privacy statement, Cookie Statement and Contact Mode.

## Design System Architecture
No public design system or brand-guidelines page was opened for this brief. The measured evidence is: one loaded font family at three weights, a single-root-variable CSS (only a carousel theme color), and repeated component values (12px radius, the two-layer shadow, 3px link radius). The system is therefore expressed in compiled component styles rather than in named tokens.

## Content and Voice
Headlines are plain-language statements of science and mission: "Pioneering mRNA technology", "World Cancer Research Day: Why Research Matters", "Latest News", "Join us and change the world of medicine". Subheads are short descriptive sentences in the lighter blue (#507995), for example "Read recent press releases from Moderna". Job cards follow a fixed pattern of title, location (Cambridge, Massachusetts), a department label such as Medical Affairs, and a date written as day, month name and year. Statistics are given as a large number with a two-line caption ("Ongoing clinical trials"). Photography shows people at work in laboratories and offices, cropped into rectangular frames that sit flush against rounded card edges.

## Do's and Don'ts
- Do use #053f68 for headings and #376586 for paragraphs on #f8fdff.
- Do use white cards with 12px corners and the soft two-layer blue shadow.
- Do reserve red #d1343e for the wordmark, search and arrow icons, and borders.
- Do write action links in upper case with a circular arrow icon.
- Don't use carousel library blue (#007aff) as a brand color.
- Don't use heavy borders or hard black shadows.
- Don't use pure black text; the darkest ink is #053f68 (a #01283c appears only on a few runs).

## Responsive Behavior
The mobile pass kept the h1 at 40px weight 700 with 48px line-height and a 358px content width. Navigation collapse, column counts and breakpoints were not measured.

## Iteration Guide
1. Start with #f8fdff, #053f68 text, and Aeonik 400 at 18px with 32px line-height.
2. Set headings at 40px bold.
3. Put content in white 12px-radius cards with the two-layer shadow.
4. Add red #d1343e only for icons and accents.
5. Re-run `node web/scripts/verify-designs.mjs --slug=moderna` after edits.
