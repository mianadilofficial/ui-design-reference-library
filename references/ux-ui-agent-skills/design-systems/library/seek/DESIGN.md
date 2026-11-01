---
version: alpha
name: SEEK
category: "Design Systems"
description: "SEEK's Australian job-search site (seek.com.au) is built on the Braid design system's seekJobs theme: SeekSans (weights 400, 600, 700), slate ink #2e3849 and #5a6881 on white, a hot SEEK pink #e60278 for the search button, deep navy #051a49 for the search band, 8px-radius controls with 2px inset outlines, 16px and 24px rounded surfaces, and a 4px spacing grid."
colors:
  canvas: "#ffffff"
  ink: "#2e3849"
  ink-muted: "#5a6881"
  primary: "#e60278"
  on-primary: "#ffffff"
  surface-navy: "#051a49"
  ink-black: "#000000"
  link-blue: "#1e47a9"
  blue-wash: "#e4f1fd"
  surface-neutral: "#ebeff2"
  surface-tint: "#f3f5f7"
  border-soft: "#eaecf1"
typography:
  display:
    fontFamily: SeekSans, "SeekSans Fallback", Arial, Tahoma, sans-serif
    fontSize: 55px
    fontWeight: 700
    lineHeight: 55px
  display-mobile:
    fontFamily: SeekSans, "SeekSans Fallback", Arial, Tahoma, sans-serif
    fontSize: 40px
    fontWeight: 700
    lineHeight: 40px
  heading:
    fontFamily: SeekSans, "SeekSans Fallback", Arial, Tahoma, sans-serif
    fontSize: 24px
    fontWeight: 600
    lineHeight: 33.792px
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
  s2: 8px
  s3: 11.74px
  s4: 12px
  s5: 13.72px
  s6: 16px
  s7: 17.74px
  s8: 20px
  s9: 24px
  s10: 29px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    height: 48px
  button-secondary:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    height: 48px
    boxShadow: rgb(46, 56, 73) 0px 0px 0px 2px inset
  button-tertiary:
    backgroundColor: "{colors.blue-wash}"
    textColor: "{colors.link-blue}"
    typography: "{typography.link}"
    rounded: "{rounded.md}"
    height: 38px
    boxShadow: rgb(30, 71, 169) 0px 0px 0px 2px inset
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    rounded: "{rounded.xs}"
  nav-link:
    textColor: "{colors.ink-muted}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-muted}"
    typography: "{typography.input}"
    rounded: "{rounded.md}"
    padding: 11.736px 16px 11.736px 46px
    height: 48px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.lg}"
    boxShadow: rgb(234, 236, 241) 0px 0px 0px 2px inset
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
---

## Overview

The SEEK homepage (seek.com.au, which lands on au.seek.com) is a calm, white, utility-first job marketplace with two strong colour moments: a deep navy search band and a hot-pink call to action. The header is a white bar with the SEEK mark (a navy circle with a dotted pattern) and the lowercase "seek" wordmark, then Job search (the active item, underlined), People search, Career advice, Companies and Recruiters; at the right is a "Sign in" outline button in blue and an "Employer site" text link. Directly beneath is the navy `{colors.surface-navy}` search band with two grey fields ("Technician roles in manufacturing at a mid-sized company" and "Enter suburb, city, or region") and a pink `SEEK` button.

Below that sit "Find your next employer" with the line "Explore company profiles to find the right work…", a horizontally scrolling row of company cards (logo, name, and a grey chip such as "315 Jobs"), a "See more →" outline button, a full-width magenta campaign banner ("Find the best job matches", with "seek and you shall find" and a man in a jungle-print outfit alongside "King. Jungle. No dress code."), a "Quick search" block of underlined text links (Classifications, Major cities, Other) and a four-column footer (Job seekers, Employers, About us, Contact). The footer closes with a land acknowledgement ("SEEK acknowledges the Traditional Custodians of the lands on which it operates…"), a gum-leaf artwork credit to Bitja, Dixon Patten Jnr, Gunnai, Gunditjmara, Yorta Yorta and Dhudhuroa, Bayila Creative, a country selector ("Australia") and legal links.

The capture was taken with a "Sign in to find jobs matched to you" dialog open over the page (a second capture with the stealth flag still showed it), so the dialog's controls (Continue with Google, Continue with Email) are treated as a prompt rather than brand UI and are not documented as components.

**Key Characteristics:**
- Slate-and-white UI with `{colors.ink}` for headings and `{colors.ink-muted}` for body, reserved pink `{colors.primary}` for the single search action.
- SeekSans in weights 400, 600 and 700; headings are semibold rather than bold.
- 8px-radius controls with inset 2px outlines instead of borders; 16px and 24px rounding on larger surfaces.
- Logo-led company cards, and a full-bleed campaign banner as the only expressive element.
- Plain, direct microcopy ("Register", "Why sign in?", "See more").

## Colors

`{colors.canvas}` (#ffffff) is the page. The two slates carry nearly all text: `{colors.ink}` (#2e3849) for headings, buttons and links, and `{colors.ink-muted}` (#5a6881), the most-read colour, for body copy and the nav. `{colors.ink-black}` (#000000) is the unstyled colour of the logo link. `{colors.surface-navy}` (#051a49) fills the search band, `{colors.surface-tint}` (#f3f5f7) and `{colors.surface-neutral}` (#ebeff2) are light fills for grey chips and neutral buttons, and `{colors.border-soft}` (#eaecf1) draws card outlines.

`{colors.primary}` (#e60278) is SEEK pink: it fills the search button and the campaign banner area and appears in the sign-in dialog artwork. The blue accent is `{colors.link-blue}` (#1e47a9) over `{colors.blue-wash}` (#e4f1fd) for the header "Sign in" button.

These values are Braid palette entries: in Braid's source, `brandAccent` for the `seekJobs` theme is `palette.seekPink['500']` (#E60278), `palette.grey['700']` is #2E3849, `grey['500']` is #5A6881, `grey['100']` is #EAECF1, `grey['75']` is #F3F5F7, `seekBlue['700']` is #051A49, `seekBlueLight['700']` (the `formAccent`) is #1E47A9 and `seekBlueLight['100']` is #E5F0FD, which matches the measured #e4f1fd within rounding.

## Typography

SeekSans is the only family, with a fallback stack of `"SeekSans Fallback", Arial, Tahoma, sans-serif`. The Braid theme source names the font file `https://www.seek.com/static/shared-web/seeksans.css` and defines weights regular 400, medium 600 and strong 700, which the site's font files (500 to 700 and normal) correspond to.

- **Display** (`{typography.display}`): 55px / 55px, weight 700, used on the campaign banner; 40px / 40px on mobile.
- **Heading** (`{typography.heading}`): 24px / 33.792px, weight 600, for "Find your next employer".
- **Button** (`{typography.button}`): 16px / 24.528px, weight 600.
- **Link** (`{typography.link}`): 14px / 20.962px, weight 600, for "Register" and small buttons.
- **Input** (`{typography.input}`): 16px / 24.528px, weight 400.

Braid's heading level 2 in the `seekJobs` base tokens is 24px on mobile and 30px on tablet, and level 1 is 28px and 36px, so the heading size measured at 24px is the mobile-sized level 2.

## Layout

The page uses a full-width white layout with sections stacked vertically: header, search band, carousel, banner, quick search, footer. The footer is a four-column grid. Braid defines `grid: 4` and content widths of 400, 660, 940 and 1280 (xsmall, small, medium, large), and the measured spacing (`{spacing.s1}` 4px, `{spacing.s2}` 8px, `{spacing.s4}` 12px, `{spacing.s6}` 16px, `{spacing.s8}` 20px, `{spacing.s9}` 24px) fits that 4px grid. The search band fields are 48px tall with 46px left padding to make room for a leading icon.

## Elevation & Depth

The system avoids drop shadows. Boxes are outlined with inset shadows: company cards use `rgb(234, 236, 241) 0px 0px 0px 2px inset`, outline buttons use `rgb(46, 56, 73) 0px 0px 0px 2px inset` and the blue "Sign in" uses `rgb(30, 71, 169) 0px 0px 0px 2px inset`. These match Braid's `border.width.standard: 2`. Depth otherwise comes from tone: the navy band, the pink banner, and the dialog that sits over a 50% black backdrop. Braid also defines a focus ring size of 6.

## Shapes

Braid's `seekJobs` border radii are small `4px`, standard `8px`, large `16px` and xlarge `24px`, and the same values were measured on the page: 8px most often (buttons, inputs, the search band fields), then 4px (links), 16px and 24px. `{rounded.md}` (8px) is the button and input radius, `{rounded.lg}` (16px) rounds the company tiles and banner as seen in the capture, `{rounded.xl}` (24px) appears on three measured elements, one of which is visually the dialog, and `{rounded.pill}` (9999px) appears on seven measured elements.

## Components

**Primary button.** `{components.button-primary}`: `{colors.primary}` fill, white 16px semibold label, 48px tall, 8px radius (the `SEEK` search button).

**Secondary button.** `{components.button-secondary}`: transparent with a 2px inset `{colors.ink}` outline, "See more" with an arrow, 48px tall.

**Tertiary button.** `{components.button-tertiary}`: `{colors.blue-wash}` fill, `{colors.link-blue}` text and 2px inset outline, 38px tall ("Sign in").

**Text input.** `{components.text-input}`: white, 8px radius, 48px tall, leading search or location icon, slate placeholder.

**Company card.** `{components.card}`: white, `{rounded.lg}`, 2px inset `{colors.border-soft}` outline, logo above name above a job-count chip.

**Links.** `{components.link}`: semibold 14px, underlined in the Quick search block.

**Footer.** `{components.footer}`: white with slate text, four columns of semibold headings over regular links.

## Design System Architecture

SEEK's design system is [Braid](https://seek-oss.github.io/braid-design-system), which its documentation describes as "A themeable design system for the SEEK Group", owned and maintained by SEEK, with Foundations, Components, Patterns, Templates and Styles sections plus Playroom and a Gallery. The repository [seek-oss/braid-design-system](https://github.com/seek-oss/braid-design-system) is MIT licensed and describes itself as "Themeable design system for the SEEK Group". The dsUrl is real and the site uses it: the homepage's inline CSS contains Braid's `[data-braid-hidefocusrings]` selector and vanilla-extract style hashed class names (such as `vhq4qk0`).

Themes are code: `themes/seekJobs/tokens.ts` calls `makeTokens({ name: 'seekJobs', displayName: 'SEEK Jobs', brandAccent: palette.seekPink['500'], brandAccentLight: palette.seekPink['200'], brandAccentSoft: palette.seekPink['50'] })`, and `baseTokens/nvl.ts` supplies typography (the SeekSans stack and weights), `grid: 4`, content widths, border radii, border widths and tone colours. Braid's [tones documentation](https://seek-oss.github.io/braid-design-system/foundations/tones) lists the tones critical, caution, positive, neutral, info and promote and says colour use "is designed to have a strong correlation with the tone of voice being used". The page's pink equals the theme's brand accent value, and the blue of the "Sign in" button equals the theme's `formAccent` value (seekBlueLight 700).

## Do's and Don'ts

### Do
- Use `{colors.primary}` for the single primary action and campaign backgrounds only.
- Set text in `{colors.ink}` and `{colors.ink-muted}` and headings at weight 600.
- Outline controls with 2px inset shadows and round them to 8px.
- Keep spacing on the 4px grid and use the 4, 8, 16, 24px radius set.
- Lead company cards with the logo and finish with a job-count chip.

### Don't
- Don't introduce new accent hues; use Braid tones for status.
- Don't use drop shadows for cards; use the inset outline.
- Don't set display or headings in weights lighter than 600.
- Don't use pink for text links; links are slate and underlined.
- Don't use more than one filled pink control in a view.

## Responsive Behavior

The display headline measures 55px on desktop and 40px on mobile (line height equal to size). Braid's heading levels carry mobile and tablet sizes (level 1: 28px and 36px; level 2: 24px and 30px), and content widths step through 400, 660, 940 and 1280. The company cards scroll horizontally with a chevron button at the right edge, and the footer's four columns are a desktop arrangement; the exact breakpoints for the mobile layout were not measured. Controls stay at 48px tall (38px for the compact "Sign in"), which keeps touch targets generous.

## Iteration Guide

1. Edit one component at a time and use token names (`{colors.primary}`, `{rounded.md}`, `{typography.button}`).
2. Start from white, `{colors.ink}` text and 4px-grid spacing.
3. Use pink only for the search action, navy for the search band and `{colors.link-blue}` for secondary actions.
4. Outline with inset 2px shadows rather than borders or drop shadows.
5. Re-run `node web/scripts/verify-designs.mjs --slug=seek` after each edit.
