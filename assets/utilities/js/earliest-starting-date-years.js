export function earliestStartingDateYears() {
    const date = new Date();
    return [
        date.getFullYear(),
        date.getFullYear()+1
    ]
}