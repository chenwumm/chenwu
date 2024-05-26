sleep 1
while true
do
    read -p "- " init str fn
    #字符串
    if [ $init = "output" ]; then
        echo $str
    fi
    if [ $init = "input" ]; then
        read -p "$str " userinputs 
        echo $userinputs
    fi
    #文件
    if [ $init = "md" ]; then
        mkdir ~/cwlang/files/$str
    fi
    if [ $init = "mf" ]; then
        touch ~/cwlang/files/$str
    fi
    if [ $init = "write" ]; then
        echo $str >$fn
    fi
    if [ $init = "see" ]; then
        cat $str
    fi
done