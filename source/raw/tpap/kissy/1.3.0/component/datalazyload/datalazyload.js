var S = KISSY;
var DataLazyload = KISSY.DataLazyload;

var lay = new DataLazyload({
	container: '.test',
	diff: 150,
	placeholder: 'http://img01.taobaocdn.com/tps/i1/T1Kz0pXzJdXXXIdnjb-146-58.png'

});

var test1 = new DataLazyload({
	container: '.test1',
	diff: 150,
	placeholder: 'http://img01.taobaocdn.com/tps/i1/T1Kz0pXzJdXXXIdnjb-146-58.png'

});

test1.addCallback(".test1", function() {	
	S.log("u see me test1,add in selector");
});

var d = new DataLazyload({
	container: '#container'	
});
S.all('#pause').on('click', function() {
	d.pause();
});

S.all('#resume').on('click', function() {
	d.resume();
});

d.on("destroy", function() {
	S.all('#gap').hide();
});

var test3 = new DataLazyload({
	container: '.test3',
	diff: 150,
	placeholder: 'http://img01.taobaocdn.com/tps/i1/T1Kz0pXzJdXXXIdnjb-146-58.png'
})

