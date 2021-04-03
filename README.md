# serializer_bench
various serializer comparison

## result


|serializer|encode|decode|
|:---:|---:|---:|
|msgpack|0.3523280620575|0.75502300262451|
|json|0.69830393791199|1.1119520664215|
|phpserializer|0.73073887825012|0.96290397644043|
|flatbuffers|43.057321071625|21.760584831238|



## how to benchmark

```
php bench.php msgpack
php bench.php json
php bench.php phpserializer
php bench.php flatbuffers

```

