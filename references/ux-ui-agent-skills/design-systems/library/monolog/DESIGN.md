---
version: alpha
name: "MONOLOG"
category: "Agencies & Studios"
description: "MONOLOG brand and web design studio site (bymonolog.com) in warm grey #e8e8e3 and near-black #080807, with Khteka headings at 131px weight 700 and -3.93px tracking, Suisse Mono captions, 2.4px radii and compact #181715 buttons with an arrow icon."
colors:
  canvas: "#e8e8e3"
  page-largest: "#080807"
  ink: "#6b645c"
  primary: "#181715"
  on-primary: "#e8e8e3"
  surface-3: "#000000"
  ink-secondary: "#938f8a"
  ink-5: "#524d47"
  hairline: "#393632"
  nav-link-text: "#fafaf9"
typography:
  display:
    fontFamily: Khteka, Arial, sans-serif
    fontSize: 131px
    fontWeight: 700
    lineHeight: 102.18px
    letterSpacing: "-3.93px"
  display-mobile:
    fontFamily: Khteka, Arial, sans-serif
    fontSize: 49.5312px
    fontWeight: 700
    lineHeight: 38.6344px
    letterSpacing: "-1.48594px"
  heading:
    fontFamily: Khteka, Arial, sans-serif
    fontSize: 23.5px
    fontWeight: 700
    lineHeight: 25.85px
    letterSpacing: "-0.3525px"
  subheading:
    fontFamily: "\"Suisse Mono\", Arial, sans-serif"
    fontSize: 11.6px
    fontWeight: 500
    lineHeight: 13.92px
    letterSpacing: "-0.116px"
    textTransform: uppercase
  body:
    fontFamily: Khteka, Arial, sans-serif
    fontSize: 17.5px
    fontWeight: 500
    lineHeight: 21px
    letterSpacing: "-0.175px"
  button:
    fontFamily: Khteka, Arial, sans-serif
    fontSize: 15.5px
    fontWeight: 500
    lineHeight: 15.5px
    letterSpacing: "-0.155px"
  link:
    fontFamily: Khteka, Arial, sans-serif
    fontSize: 10.2px
    fontWeight: 500
    lineHeight: 10.2px
    letterSpacing: "-0.175px"
rounded:
  xs: 2.4px
  sm: 5.6px
  pill: 9999px
spacing:
  s1: 0.24px
  s2: 0.8px
  s3: 2.4px
  s4: 4.38px
  s5: 5.8px
  s6: 7.5px
  s7: 8px
  s8: 11.5px
  s9: 15.5px
  s10: 16px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 4.375px 4.375px 4.375px 7.5px
    height: 35px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 3.875px 3.875px 3.875px 7.5px
    height: 31px
  link:
    textColor: "{colors.page-largest}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.page-largest}"
    padding: 24px
  nav-link:
    textColor: "{colors.nav-link-text}"
    typography: "{typography.body}"
    transform: matrix(1, 0, 0, 1, 0, 0)
  footer:
    backgroundColor: "{colors.surface-3}"
    textColor: "{colors.canvas}"
---

# MONOLOG

## Overview
The measured site is bymonolog.com, titled "MONOLOG | Brand and Web Design Studio founded By Huy" (title as recorded, truncated in the extraction). It is the portfolio and sales page of a studio that positions itself as a "Design partner for B2B brands". The hero reads: "Websites and identities that live up to your ambition", with a left-hand paragraph ("You've outgrown your brand and website. We help you build a presence that reflects your reputation and expertise, so the right clients see your value and take you seriously.") and two dark buttons, "Schedule an intro call" and "Start a project". Navigation items are About, Work, Services, Process and Start a project, with a small sound-toggle icon.

The page is a long scroll of 12581px. After the hero, a large photograph of a laptop on an olive velvet sofa carries two floating cards with client results (for example "Increased OH Arch's conversions by 21%, generating $2M+ in revenue", each tagged "CLIENT WINS • 2026"). Then comes a "Brands we've helped" grid of eight client logos (Vinamilk, Moc Chau Creamery, University of Sydney, OH Architecture, Shortscut, Supersolid Agency, Slik Agency, Mammoth Murals) captioned in monospace; a black testimonial section with a quote from the CEO of Shortscut beside a very large, low-contrast manifesto paragraph; and a black footer with oversized navigation words each followed by an arrow. The style is editorial and tactile: a grainy warm-grey ground with giant ghosted letterforms behind the hero, tight heavy headlines and tiny monospaced captions.

## Colors
By painted area the page is split between near-black `{colors.page-largest}` (#080807, 10557 weighted area, the dark sections), warm grey `{colors.canvas}` (#e8e8e3, 6037, the hero and light sections), pure black `{colors.surface-3}` (#000000, 3510, the footer) and the button fill `{colors.primary}` (#181715, 2167). Translucent grey and white overlays (#6262621a, #ffffff1a) mark the nav sound button and cards. By characters read, `{colors.ink-secondary}` (#938f8a) leads (3157, the muted large manifesto and captions), then #e8e8e3 on dark (2817), `{colors.ink}` (#6b645c, 1211, running text on the light ground), #080807 (1186, headlines on light) and `{colors.ink-5}` (#524d47, 111). `{colors.hairline}` (#393632) and #524d47 are the common border colors and `{colors.nav-link-text}` (#fafaf9) is the footer and dark-section nav text.

The root defines theme variables in Webflow's naming style (for example `--_theme---border` pointing at a `--swatch--beige-400` swatch), which confirms the palette is a beige-to-black swatch family. There is no chromatic brand color on the interface itself; color comes from client work and photography (olive, mustard yellow, orange).

## Typography
Three faces are loaded: Khteka (weights 500 and 700, 8003 weighted characters, headlines, body and UI), Suisse Mono (400, 392, the uppercase captions in parentheses such as "(REAL CLIENT STORIES)" and logo labels) and Animo (400, 102, a logo-lettering face). Arial is the declared fallback for Khteka and Suisse Mono. No foundry source was opened for these faces.

`{typography.display}`: Khteka 131px weight 700, line-height 102.18px, letter-spacing -3.93px (the hero). `{typography.display-mobile}`: 49.5312px, 38.6344px line-height, -1.48594px. `{typography.heading}`: 23.5px bold, 25.85px line-height, -0.3525px (section headings such as "Clients"). `{typography.subheading}`: Suisse Mono 11.6px weight 500, 13.92px line-height, -0.116px tracking, uppercase. `{typography.body}`: Khteka 17.5px weight 500, 21px line-height, -0.175px. `{typography.button}`: 15.5px weight 500, 15.5px line-height, -0.155px. `{typography.link}`: 10.2px weight 500. Also measured: 50px and 69px display sizes (footer links and the manifesto text, with -1.5px and -2.07px tracking) and 19.5px. Tracking is a consistent -0.01em on every Khteka size (for instance -0.175px at 17.5px), and a negative -0.03em at the hero size. Weights are 500 (7271) and 700 (1226).

## Layout
The desktop width is 1280px with a 79px header (24px padding). The hero is two columns: a narrow left column with the intro paragraph, the button and the label "(Design partner for B2B brands)" and a wide right column with the display headline spanning 816px. In the capture, content sections place the main media in the right two-thirds and small captions in the left third. The logo grid is four columns by two rows with hairline rules between rows. Gaps: 16px (31 uses), 11.5px, 23px, 7.5px, 31px, 80px, 58px, 38px, 196px and 100px. Paddings: 24px (24), 7.5px, 15.5px, 72px, 0.24px, 23px, 11.5px. The spacing tokens `{spacing.s1}` to `{spacing.s10}` list the small steps (0.24px to 16px). Density is medium; whitespace is large around the display type.

## Elevation & Depth
No box-shadow was measured. Depth is created by translucent overlays (white at 10% and grey at 10% alpha), grain on the warm-grey ground, giant ghosted letterforms behind content, and alternation between light and black sections. Borders are 1px lines in #393632, #524d47 or #d1d1c7.

## Shapes
Radii: 2.4px on 49 elements (`{rounded.xs}`, buttons, cards and the sound toggle), 5.6px on one (`{rounded.sm}`), and large values (1280px on 5, 3000px on 2) that give the `{rounded.pill}` shape to circular avatars and dots. The look is nearly square: small softened corners on UI controls, square photographs.

## Components
**Primary button** (`{components.button-primary}`): #181715 fill, #e8e8e3 Khteka 15.5px text, 2.4px radius, padding 4.375px 4.375px 4.375px 7.5px, 35px tall, with an icon square (north-east arrow) at the right end ("Schedule an intro call", 189px wide). **Secondary button** (`{components.button-secondary}`): the same fill and text, 31px tall, padding 3.875px 3.875px 3.875px 7.5px ("Start a project"). **Nav** (`{components.nav}`): 24px padding, #080807 text on the light ground; footer nav links (`{components.nav-link}`) are 17.5px #fafaf9 on black, with the footer words themselves at 50px bold. **Link** (`{components.link}`): 10.2px #080807 in project rows (index like "SS /05", client name and one-line brief). **Footer** (`{components.footer}`): pure black with #e8e8e3 text, 1112px tall.

## Design System Architecture
No public design system or brand-guidelines page was opened. The shipped CSS is a Webflow build whose root custom properties form a layered theme system: `--_theme---*` variables (border, button-primary background, border and hover text, text link) reference `--swatch--*` color swatches and `--_typography---font--*` families and `--_text-style---*` presets, so components inherit colors from a theme layer rather than hard-coding them. One easing is declared, `--animation-expo-out: cubic-bezier(0.2, 1, 0.36, 1)`. The font faces include webflow-icons.

## Voice and Content Patterns
The copy speaks directly to founders and leans on proof: result statements with numbers ("conversions by 21%", "$2M+ in revenue", "close $100k+ in new deals within 30 days of launch"), a named testimonial with role (Tuan Le, CEO, Shortscut) and a numbered slider (01/02). Labels are lowercase-friendly and plain ("Brands we've helped", "Clients"), while monospaced parenthetical tags act as quiet annotations. The black manifesto section sets a long paragraph at display scale in a muted grey; the muted color is the measured #938f8a. Project rows in the work list use a compact index, client name and one-line brief set in the smallest measured size.

## Do's and Don'ts
- Do pair #e8e8e3 ground with #080807 headlines and #6b645c running text; invert to #e8e8e3 on black sections.
- Do set Khteka at weight 700 with tight negative tracking at display sizes.
- Do use Suisse Mono uppercase in parentheses for captions and labels.
- Do keep buttons small, dark and square-cornered (2.4px) with an arrow icon.
- Don't add chromatic UI colors; the palette is beige to black.
- Don't use drop shadows; none were measured.
- Don't use the mid-grey #938f8a for essential content on black below display sizes.

## Responsive Behavior
The mobile pass measured the h1 at 49.5312px weight 700 with 38.6344px line-height and -1.48594px tracking in a 364px column, against 131px on desktop. Menu collapse, grid changes and breakpoints were not measured.

## Iteration Guide
1. Set the page on #e8e8e3 with #080807 headlines in Khteka 700.
2. Add a black section with muted #938f8a large type for statements.
3. Use 2.4px radius, #181715 buttons with an arrow icon.
4. Caption everything small in Suisse Mono uppercase.
5. Re-run `node web/scripts/verify-designs.mjs --slug=monolog` after edits.
