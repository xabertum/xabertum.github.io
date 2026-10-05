/**
 * Formats the elapsed time since `startDateIso` (e.g. '2025-07-01') up to
 * `referenceDate` (defaults to now) as a Spanish "X años Y meses" string,
 * counting both the start and current month inclusively — the same
 * convention used by the hand-written historical entries in
 * `experience.data.ts` (e.g. "marzo de 2023 – noviembre de 2023 (9 meses)").
 *
 * Used to keep an ongoing role's displayed duration (e.g. "julio de 2025 –
 * Presente") accurate as of the day the page is viewed, instead of a
 * hardcoded value that goes stale over time.
 */
export function formatElapsedSince(startDateIso: string, referenceDate: Date = new Date()): string {
  const start = new Date(startDateIso);

  const totalMonths = Math.max(
    (referenceDate.getFullYear() - start.getFullYear()) * 12 +
      (referenceDate.getMonth() - start.getMonth()) +
      1,
    1,
  );

  const years = Math.floor(totalMonths / 12);
  const months = totalMonths % 12;

  const parts: string[] = [];
  if (years > 0) {
    parts.push(`${years} ${years === 1 ? 'año' : 'años'}`);
  }
  if (months > 0) {
    parts.push(`${months} ${months === 1 ? 'mes' : 'meses'}`);
  }

  return parts.join(' ');
}
