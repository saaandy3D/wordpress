#!/usr/bin/zsh

echo "input str"
read str
echo "----search:"$str'が含まれるファイル'"-------"

date >> result.txt

grep -lr $str * >> result.txt

sort -u result.txt > result_sort.txt

if [ $? = "0" ]; then
         echo "success 結果をresult_sort.txtに保存"
 else
         echo "can't find"
 fi
