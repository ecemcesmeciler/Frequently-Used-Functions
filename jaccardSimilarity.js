function jaccardSimilarity(text1, text2) {
    const tokenize = text => text.toLowerCase().split(/\s+/);
    const tokens1 = new Set(tokenize(text1));
    const tokens2 = new Set(tokenize(text2));

    const intersection = new Set([...tokens1].filter(token => tokens2.has(token)));

    const union = new Set([...tokens1, ...tokens2]);

    const similarity = intersection.size / union.size;

    return similarity;
}

const text1 = '13th generation';
const text2 = "12th generation";

const similarity = jaccardSimilarity(text1, text2);
console.log("Jaccard similarity:", similarity);
