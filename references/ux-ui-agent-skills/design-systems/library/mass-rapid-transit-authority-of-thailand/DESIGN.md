---
version: alpha
name: Mass Rapid Transit Authority of Thailand (MRTA)
category: "Thai Brands"
description: "Thai metro authority site at mrta.co.th/th: red #d72027 top bar and navy #172655 / #0e215a bands, Prompt 14.4px body, 6px-radius poster news cards on #e6e6e6, white announcements list with navy date badges; intro splash excluded."
colors:
  canvas: "#ffffff"
  ink: "#020b10"
  primary: "#d72027"
  on-primary: "#ffffff"
  ink-body: "#212529"
  surface-light: "#f8f9fa"
  surface-navy: "#172655"
  surface-card: "#e6e6e6"
  ink-light-blue: "#84c2ff"
  hairline: "#dee2e6"
  nav-bg: "#d72027"
  footer-bg: "#0e215a"
typography:
  display:
    fontFamily: Prompt, sans-serif
    fontSize: 18px
    fontWeight: 500
    lineHeight: 28.8px
  nav:
    fontFamily: Nunito, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 16px
  link:
    fontFamily: Prompt, sans-serif
    fontSize: 14.4px
    fontWeight: 400
    lineHeight: 23.04px
rounded:
  xs: 4px
  sm: 4.8px
  md: 6px
  lg: 8px
  xl: 12px
  2xl: 20px
  pill: 9999px
spacing:
  s1: 2.4px
  s2: 4px
  s3: 5.6px
  s4: 6px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 13.6px
  s9: 16px
  s10: 24px
components:
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.canvas}"
    padding: 8px 0px
  nav-link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.nav-bg}"
    typography: "{typography.nav}"
    rounded: "{rounded.pill}"
    padding: 2.4px 5.6px 0.8px
  card:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.ink}"
    rounded: "{rounded.md}"
  footer:
    backgroundColor: "{colors.footer-bg}"
    textColor: "{colors.canvas}"
---

## Overview
The first extraction of mrta.co.th measured the site's intro overlay: a full-screen blue splash with a carousel of campaign posters and two buttons, "เข้าสู่เว็บไซต์" (enter site) and "e-Services". That entry layer was not the real home page, so the page was re-measured at https://www.mrta.co.th/th, where the extractor hid the intro overlay (`overlay-intro bg-ad ...`) and the cookie popup (`cookies-consent-popup`). The measured brand is the Mass Rapid Transit Authority of Thailand (การรถไฟฟ้าขนส่งมวลชนแห่งประเทศไทย, รฟม.), title "การรถไฟฟ้าขนส่งมวลชนแห่งประเทศไทย", lang th, page width 1280px, scroll height 4828px. The page opens with a red strip carrying the authority's vision ("วิสัยทัศน์ ของ รฟม.") in quote marks and social icons plus a text-size menu, then a white logo block beside a dark-blue navigation bar (about us, news, services, rail projects, tickets and fares, media, e-Services, ITA, areas), a language switcher with a Thai flag, a full-width hero banner showing a mascot and contact channels (website, e-mail, live chat, call centre, LINE, Facebook), a lilac panel of six icon shortcuts, a "ข่าวประชาสัมพันธ์" (press news) grid of eight poster cards with a red pin ribbon on pinned items, and a dark navy announcements section over a blurred city skyline with white outline icons for procurement notices and a white list of dated announcements with navy date badges. A floating chat prompt ("ต้องการความช่วยเหลือหรือไม่") at the right edge is a widget and is not documented as brand UI. The voice is official and service-oriented, with abbreviated Thai dates such as "03 ต.ค. 69".

## Colors
The top bar and nav accent are red #d72027 (nav-bg, measured on the mobile nav at 390px and on the round nav icon text); the logo block is white; the dark band is navy #172655 (area weight 1201), with a deeper footer navy #0e215a (426), a translucent #2e3a7f80 (2166) and #263c82 (384). Light surfaces are #f8f9fa (665) and the card grey #e6e6e6 (664). Text colors by character weight: #020b10 (2082, the generated ink), #212529 (1393, Bootstrap body color), #f8f9fa (759), white (443), light blue #84c2ff (94) and #0d6efd (27). I reassigned `primary` from the generator's #f8f9fa to red #d72027: the generator's button was the "ข้อมูลทั่วไป" accordion item of the mobile menu (75px high), not a brand call-to-action. #0d6efd is the Bootstrap default link blue (the site's :root also declares --bs-primary #0d6efd) and is dropped. A coral #f06367 button fill ("เข้าสู่เว็บไซต์") was measured only on the splash and is not used. Hairline borders are #dee2e6. Dark mode was not measured.

## Typography
Primary family Prompt (Thai-capable sans, weights 300, 400, 500, 600 and italic 400) with Nunito used on the round nav icon and cards, plus Sarabun (400, 500, 600) and Cardo 700 loaded for specific blocks; icon fonts Font Awesome 5 and bootstrap-icons. Sizes by character weight: 14.4px (4152), 16px (310), 18px (275), 21.6px (40), 36px (33), 28.8px (3). Weights: 400 (2027), 700 (1153), 600 (1137), 500 (385), 300 (112). Tokens: display 18px / 28.8px weight 500 (the vision heading in the red bar); link 14.4px / 23.04px; nav 16px / 16px (Nunito); the mobile pass also found a 16px / 25.6px weight 500 label for the accordion item. Prompt, Nunito and Sarabun are open fonts.

## Layout
Page width 1280px. The header has three stacked rows (red strip, logo and blue navigation, language row). The news grid is four columns by two rows of cards 216px wide by 192px high in the extractor's card role (the cards in the capture show poster thumbnails with a date and two-line headline beneath). The announcements band is three columns: procurement icons, job announcements (an empty state reading "ยังไม่มีประกาศ", no announcements yet) and a white list of announcements. Measured paddings: 8px (103), 12px (82), 4px (23), 24px (14), 6px (12), 16px (7).

## Elevation & Depth
A single soft shadow was measured: `rgba(23, 73, 77, 0.15) 0px 20px 30px 0px`, along with an empty inset shadow. Panels are mostly flat: the lilac shortcut panel, white list and grey cards carry no measured shadow. Depth comes from the blurred skyline photograph behind the navy band and from the translucent #2e3a7f80 layer.

## Shapes
Radii by weight: 6px (28, buttons and cards), 50% (19, round icon buttons), 4.8px (16), 4px (14), 8px (8), 800px (3). Tokens: xs 4px, sm 4.8px, md 6px, lg 8px, xl 12px, 2xl 20px, pill 9999px. The shortcut panel and the news cards use the 6px radius; badges are small squares in navy.

## Components
Nav: red (#d72027) bar on mobile with white 18px weight 500 text, 142px high at 390px; desktop navigation in the capture is a dark blue bar with white labels and chevrons. Nav-link: a white 26px circle with a red glyph (Nunito 16px, padding 2.4px 5.6px 0.8px). Card: #e6e6e6, 6px radius, 216px by 192px, #020b10 text. Footer: #0e215a with white text. The detected generated buttons were menu items, so no button-primary token is declared; the measured splash buttons were coral (#f06367, 6px radius, 14.4px label, 37px high) and belong to the discarded intro layer. News pin: a red corner ribbon with a pin icon. Date badge: navy square with white day and month.

## Design System Architecture
No public design system or brand guideline was found (not searched; pages were measured via the extractor only). The site is Bootstrap 5 based: :root declares --bs-primary #0d6efd, --bs-success #198754, --bs-yellow #ffc107, --bs-border-color #dee2e6, --bs-border-radius-xl 1rem and others, with Swiper navigation icons. The brand layer sits on top: red #d72027, navy #172655 / #0e215a, Prompt type and the mascot artwork. Bootstrap's palette values are framework defaults, not brand tokens.

## Do's and Don'ts
Do use red #d72027 for the top bar and active accents, navy #172655 and #0e215a for dark bands, and white cards on navy with navy date badges. Do set Thai text in Prompt at 14.4px with weight 400 and headings at weight 500 to 600. Do keep card radii at 6px. Don't use Bootstrap blue #0d6efd as a brand colour. Don't document the intro splash, cookie popup or floating chat prompt as brand UI. Don't treat the mobile accordion item as a call-to-action.

## Responsive Behavior
The 390px mobile pass measured: h1 18px / 28.8px weight 500 in white; the nav block 390px wide by 142px high with #d72027 background, white text and 8px 0 padding; the accordion button 294px wide by 75px high with 6px radius, 16px weight 500 text on #f8f9fa. Body text sizes on mobile were 14.4px (4009), 16px (310) and 18px (275). Column counts and navigation collapse behaviour beyond these values were not measured.

## Iteration Guide
1. Canvas #ffffff, ink #020b10, red #d72027, navy #172655 and #0e215a. 2. Prompt 14.4px body, 18px weight 500 headline. 3. Cards 6px radius on #e6e6e6, news poster grid 4 by 2. 4. Announcements: white list on navy with navy date badges. 5. Always measure /th, not the root splash. 6. Button styles, hover states (only carousel arrows were recorded, opacity 0.5 to 0.9) and dark mode were not measured.

## Notes on Measurement Scope
Measurements come from one desktop pass at 1280px and one mobile pass at 390px of the Thai home page. Ticketing, route maps, e-Services, the procurement system and interior news pages were not measured. The extractor found no h2 or body-text role, so the display token comes from the vision heading in the red bar, and no input token exists. The first pass of the site root measured a splash overlay and is not used. Colors listed in the Colors section were taken from the extraction; the logo and mascot artwork colors were not separately extracted.
