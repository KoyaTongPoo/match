<template>
<v-container>
  <v-row
    v-touch="{
      left: () => swipe('Left'),
      right: () => swipe('Right'),
      up: () => swipe('Up'),
      down: () => swipe('Down')
    }">

<v-sheet id=D @keydown="onKeydown">

</v-sheet>
<v-btn @click="Y">
  test
</v-btn>
  </v-row>
</v-container>
</template>


<script>
  export default {
    data: () => ({
      swipeDirection: 'None',
      // ブロックの作成 
// 中心からの差分で配置する。棒を除くすべてのブロックはＬ字にブロックがあり、 

B:[[-11],[-24],[2],[13],[-13],[-1],[2,-1]], // それ以外の１個だけを別にする 
D: document, 
// 位置は、縦方向１マスは 12 単位となる 座標(x,y) なら h=x+y*12 
h:'17', // ブロックの中心位置初期化 
Z:[], // バッファ [0-239]:固定したブロック用 [240-479]:表示用バッファ 
    }),

    methods: {
      onKeydown: function() {
        K=event.keyCode
        Y()
        console.log(Y)
for(K=t=P=this.i=0;i<240;){

　　D.write(i%12?"":"\n","<b></b>"); // HTML表示領域の描画

　　Z[240+i]=Z[this.i]=++i%12<2||i>228?S="□":"　"; // 床と壁の設定、番兵にもなる
}
        for(K=t=P=this.i=0;i<240;){

　　D.write(i%12?"":"\n","<b></b>"); // HTML表示領域の描画

　　Z[240+i]=Z[this.i]=++i%12<2||i>228?S="□":"　"; // 床と壁の設定、番兵にもなる
}


    },
       Y(){ 

　　this.Z[11]=this.P; // 得点を表示バッファに書き込み 
　　this.E=this.B[this.t]; // 現在落下中のブロック 
　　this.f=0; // 移動・回転決定用フラグ 
　　if(this.K) // キーが押されているか 
　　　　if(this.K!=32){ // 横移動 

　　　　　　this.d=this.K-37?1:-1 // d:x方向の差分 
　　　　　　for(this.i=0;this.i<4;this.i++) // 横移動判定 

　　　　　　　　this.f+=this.Z[this.h+this.E[this.i]+this.d]==this.S; // 移動先が空白かどうか 
　　　　　　this.f?0:this.h+=this.d; // すべて空白なので移動決定 

　　　　}else{ // 回転 
　　　　　　this.C=[]; // 回転先の座標保持用 
　　　　　　for(this.i=0;this.i<4;this.i++){ // 回転判定 
　　　　　　　　this.p=this.E[this.i]; // ブロックの各位置 
　　　　　　　　this.v=Math.round(this.p/12); // 回転先の x 座標 
　　　　　　　　this.w=this.p-this.v*12; // 回転先の y 座標 
　　　　　　　　this.C[this.i]=this.w*12-this.v; // 回転先の座標計算 

　　　　　　　　if(this.Z[this.h+this.C[this.i]]==this.S)this.f=1; // 回転先が空白かどうか 
　　　　　　} 

　　　　　　this.t*!this.f?this.E=this.B[this.t]=this.C:0; // すべて空白なので回転決定 
　　　　} 
　　this.K=0; // キー入力キャンセル 

　　for(this.f=this.i=0;this.i<4;this.i++){ // 落下判定 
　　　　this.f+=this.Z[12+(this.p=this.h+this.E[this.i])]==this.S; // 落下先が空白かどうか 
　　　　this.Z[240+this.p]=this.S // ブロック表示のために表示バッファへコピー 
　　} 
　　if(this.f){ // 落下できない 
　　　　for(this.i=0;this.i<4;this.i++)this.Z[this.h+this.E[this.i]]=this.S; // ブロック停止 
　　　　this.t=++this.t%7; // 次のブロック決定（現在順送り） 
　　　　this.h=17 // 位置初期化 
　　}else　this.h+=12; // 一段落下 

　　for(this.k=1,this.i=19;this.i--;){ // ラインがそろったか判定 

　　　　for(this.j=11;--this.j&&this.Z[i*12+j]==this.S;); // そろったラインを検索 
　　　　if(!this.j){ // そろった 
　　　　　　this.P+=this.k++; // 得点 1ライン 1点, ..., テトリス 10点 になる 

　　　　　　for(this.j=++this.i*12;this.j>2*12;)this.Z[this.j]=this.Z[this.j---12] // 全体を一段下げる 
　　}} 

　　for(this.i=240;this.i--;){ 
　　　　this.D.all(6+this.i).innerHTML=this.Z[240+this.i]; // 表示用バッファを表示 

　　　　this.Z[240+this.i]=this.Z[this.i] // 表示バッファのクリア 
　　} 
　　this.Z[5]!=this.S?setTimeout(this.Y,99):0; // 入り口にブロックがあったら終了 
}, 


    },
  }
  
</script>