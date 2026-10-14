import { describe, expect, test } from "bun:test"
import { getDiscountCountdownRemaining } from "./discountCountdown.js"

describe("discount countdown", () => {
  test("splits the remaining time into the displayed day, hour, minute, and second fields", () => {
    const now = Date.UTC(2030, 0, 1, 0, 0, 0)
    const expiresAt = new Date(now + ((2 * 24 + 4) * 60 * 60 + 5 * 60 + 6) * 1000)

    expect(getDiscountCountdownRemaining(expiresAt, now)).toEqual({
      days: 2,
      hours: 4,
      minutes: 5,
      seconds: 6,
      done: false,
    })
  })

  test("keeps the countdown active during its final partial second", () => {
    const now = Date.UTC(2030, 0, 1, 0, 0, 0)

    expect(getDiscountCountdownRemaining(now + 500, now)).toEqual({
      days: 0,
      hours: 0,
      minutes: 0,
      seconds: 0,
      done: false,
    })
  })

  test("preserves the previous dayjs day-field rollover", () => {
    const now = Date.UTC(2030, 0, 1, 0, 0, 0)

    expect(getDiscountCountdownRemaining(now + 40 * 24 * 60 * 60 * 1000, now)).toEqual({
      days: 10,
      hours: 0,
      minutes: 0,
      seconds: 0,
      done: false,
    })
  })

  test("marks the countdown done at expiry and never returns negative values", () => {
    const expiresAt = Date.UTC(2030, 0, 1, 0, 0, 0)
    const completed = {
      days: 0,
      hours: 0,
      minutes: 0,
      seconds: 0,
      done: true,
    }

    expect(getDiscountCountdownRemaining(expiresAt, expiresAt)).toEqual(completed)
    expect(getDiscountCountdownRemaining(expiresAt, expiresAt + 60_000)).toEqual(completed)
  })

  test("treats an invalid expiry as completed", () => {
    expect(getDiscountCountdownRemaining("not-a-date", Date.UTC(2030, 0, 1))).toEqual({
      days: 0,
      hours: 0,
      minutes: 0,
      seconds: 0,
      done: true,
    })
  })
})
