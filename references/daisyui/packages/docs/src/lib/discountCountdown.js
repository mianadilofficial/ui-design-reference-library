const completedCountdown = () => ({
  days: 0,
  hours: 0,
  minutes: 0,
  seconds: 0,
  done: true,
})

const toTimestamp = (value) => {
  if (typeof value === "number") return value
  if (value instanceof Date) return value.getTime()
  return new Date(value).getTime()
}

export function getDiscountCountdownRemaining(expiresAt, now = Date.now()) {
  let remainingMilliseconds = toTimestamp(expiresAt) - toTimestamp(now)

  if (!Number.isFinite(remainingMilliseconds) || remainingMilliseconds <= 0) {
    return completedCountdown()
  }

  // Preserve svelte-countdown/dayjs duration fields: days wrap after a 30-day month.
  remainingMilliseconds %= 365 * 24 * 60 * 60 * 1000
  remainingMilliseconds %= 30 * 24 * 60 * 60 * 1000

  const totalSeconds = Math.floor(remainingMilliseconds / 1000)
  const days = Math.floor(totalSeconds / 86400)
  const hours = Math.floor((totalSeconds % 86400) / 3600)
  const minutes = Math.floor((totalSeconds % 3600) / 60)
  const seconds = totalSeconds % 60

  return {
    days,
    hours,
    minutes,
    seconds,
    done: false,
  }
}
