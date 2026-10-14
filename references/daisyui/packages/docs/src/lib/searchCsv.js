export const SEARCH_CSV_FIELDS = ["title", "url", "classnames"]

function serializeCsvValue(value) {
  const stringValue = String(value ?? "")

  if (/[",\r\n]/.test(stringValue)) {
    return `"${stringValue.replace(/"/g, '""')}"`
  }

  return stringValue
}

export function serializeSearchCsvRow(row) {
  return SEARCH_CSV_FIELDS.map((field) => serializeCsvValue(row[field])).join(",")
}

export function serializeSearchCsv(rows, { includeHeader = true } = {}) {
  const serializedRows = rows.map(serializeSearchCsvRow)

  if (includeHeader) {
    serializedRows.unshift(SEARCH_CSV_FIELDS.join(","))
  }

  return serializedRows.join("\n")
}

function parseCsvRecords(csvText) {
  const records = []
  let record = []
  let value = ""
  let inQuotes = false

  const finishRecord = () => {
    record.push(value)
    value = ""

    if (record.length > 1 || record[0] !== "") {
      records.push(record)
    }

    record = []
  }

  const input = String(csvText ?? "").replace(/^\uFEFF/, "")

  for (let index = 0; index < input.length; index++) {
    const character = input[index]

    if (inQuotes) {
      if (character === '"') {
        if (input[index + 1] === '"') {
          value += '"'
          index++
        } else {
          inQuotes = false
        }
      } else {
        value += character
      }
      continue
    }

    if (character === '"' && value === "") {
      inQuotes = true
    } else if (character === ",") {
      record.push(value)
      value = ""
    } else if (character === "\n" || character === "\r") {
      if (character === "\r" && input[index + 1] === "\n") {
        index++
      }
      finishRecord()
    } else {
      value += character
    }
  }

  if (inQuotes) {
    throw new Error("Invalid search CSV: unterminated quoted value")
  }

  if (value !== "" || record.length > 0) {
    finishRecord()
  }

  return records
}

export function parseSearchCsv(csvText, { hasHeader = true } = {}) {
  let records = parseCsvRecords(csvText)

  const isExpectedHeader = (record) =>
    record?.length === SEARCH_CSV_FIELDS.length &&
    SEARCH_CSV_FIELDS.every((field, index) => record[index] === field)

  if (hasHeader === "auto") {
    const headerIndex = records.findIndex(isExpectedHeader)
    if (headerIndex !== -1) records.splice(headerIndex, 1)
  } else if (hasHeader) {
    const header = records[0]

    if (!isExpectedHeader(header)) {
      throw new Error(`Invalid search CSV header: expected ${SEARCH_CSV_FIELDS.join(",")}`)
    }

    records = records.slice(1)
  }

  return records
    .map(([title = "", url = "", classnames = ""]) => ({
      title: title.trim(),
      url: url.trim(),
      classnames: classnames.trim(),
    }))
    .filter((item) => item.title && item.url)
}
