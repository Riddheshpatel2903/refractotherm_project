const fs = require('fs');
const path = require('path');

const dir = 'd:/Refactor/refractotherm/includes/product_suggestion';
const files = fs.readdirSync(dir);

const result = {};

files.forEach(file => {
  if (!file.endsWith('.php')) return;
  const content = fs.readFileSync(path.join(dir, file), 'utf8');
  
  // Extract allCategoryProducts array
  const arrayMatch = content.match(/const allCategoryProducts = \s*([\s\S]*?\];)/);
  // Extract fallback image
  const fallbackMatch = content.match(/prod\.image \|\| ["'](.*?)["']/);
  
  const category = file.replace('.php', '');
  
  if (arrayMatch && fallbackMatch) {
    let arrayStr = arrayMatch[1];
    // Clean comments from arrayStr if any
    // remove single line comments
    arrayStr = arrayStr.replace(/\/\/.*$/gm, '');
    
    // Evaluate or parse the javascript array string safely
    let products = [];
    try {
      // Use Function to safely evaluate the array literal
      products = new Function(`return ${arrayStr.replace(/;$/, '')}`)();
    } catch(e) {
      console.error(`Error parsing ${file}:`, e);
      console.log('Str was:', arrayStr);
    }
    
    result[category] = {
      fallback: fallbackMatch[1],
      products: products
    };
  } else {
    console.log(`Could not match in ${file}. array: ${!!arrayMatch}, fallback: ${!!fallbackMatch}`);
  }
});

console.log(JSON.stringify(result, null, 2));
