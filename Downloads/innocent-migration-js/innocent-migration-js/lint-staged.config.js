module.exports = {
  '**/*.ts?(x)': () => 'tsc --noEmit --skipLibCheck --pretty',
  '**/*.(ts|tsx|js)': ['eslint --fix', 'prettier --write'],
  '**/*.(md|json)': 'prettier --write',
  '**/*.{css,scss}': 'stylelint --fix'
};
