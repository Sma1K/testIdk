let glob = [];
let arr = {
    "key1": [5, 7, 3, 5],
    "key2": ["gdf1", "fgdf2", "gdf3", "fgdf4"],
    "key3": [
        [1, 2],
        [3, 4],
        [5, 6],
        [7, 8]
    ]
};

for (let i = 0; i < (arr["key1"]).length; i++) {
    let test = {};
    Object.keys(arr).forEach((key, val) => {

        let tmp = {
            [key]: arr[key][i]
        };
        test = Object.assign(test, tmp);
    })
    glob.push(test);
}
console.log(glob);
