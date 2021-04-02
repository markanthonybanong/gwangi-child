export function latestStartingDateYears() {
    const date = new Date();
    return [
        date.getFullYear(),
        date.getFullYear()+1,
        date.getFullYear()+2
    ]
}
