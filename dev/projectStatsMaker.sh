#!/bin/sh

# This script is used to generate a badge for the project cost
# It is used in the README.md file

# The average Indian Developer Yearly Wage in INR ₹11990
scc --avg-wage 11990 \
    --by-file \
    --exclude-dir .git,languages \
    --exclude-ext json,md,gitignore,gitmodules,txt \
    --format table \
    -o scc.txt \
    -d \
    --no-min-gen \
    --no-duplicates  \
    .

# get the values and create a sheild badge with style for_the_badge
cost=$(grep 'Estimated Cost to Develop' scc.txt | awk '{print $6}')
effort=$(grep 'Estimated Schedule Effort' scc.txt | awk '{print $5}')
lines=$(grep 'Total' scc.txt | awk '{print $3}')

# Create the shield badges
cost_badge="https://img.shields.io/badge/Cost-$cost-238636?style=for-the-badge"
effort_badge="https://img.shields.io/badge/Effort-$effort%20months-blue?style=for-the-badge"
lines_badge="https://img.shields.io/badge/Lines-$lines-blueviolet?style=for-the-badge"

echo "Cost: $cost"
echo "Effort: $effort"
echo "Lines: $lines"

## Uncomment to add the badges for the first time.
# echo "![Cost]($cost_badge)" >> readme.md
# echo "![Effort]($effort_badge)" >> readme.md
# echo "![Lines]($lines_badge)" >> readme.md
# echo "✅ Lines appended at the end of readme.md, please move it to the desired location."

rm scc.txt
echo "🗑️ Deleted scc.txt"

## Replace the existing badges in the README.md file with the new ones
sed -i '' 's|https://img.shields.io/badge/Cost-.*style=for-the-badge|'"$cost_badge"'|' ./readme.md
sed -i '' 's|https://img.shields.io/badge/Effort-.*style=for-the-badge|'"$effort_badge"'|' ./readme.md
sed -i '' 's|https://img.shields.io/badge/Lines-.*style=for-the-badge|'"$lines_badge"'|' ./readme.md