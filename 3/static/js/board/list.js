(function () {
    const trList = document.querySelectorAll('tbody > tr');

    // 예) dataset 사용방법 알기
    // const tr1 = trList[0];
    // console.log(tr1.dataset.i_board);

    trList.forEach((tr) => {
        tr.addEventListener('click', () => {
            location.href = `detail?i_board=${tr.dataset.i_board}`;
        });
    })
}
)();