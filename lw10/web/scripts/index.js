sendBtn = document.getElementsByClassName('user-data__input-sending')[0];
sendBtn.addEventListener('click', async () => {
    const formInfo = new FormData(document.getElementsByClassName('user-data')[0]);
    const response = await fetch('index.php',
      {
        method: 'POST',
        body: formInfo,
      })
    const json = response.json();
    if (json['accept_msg']) {


    }
  }
)

