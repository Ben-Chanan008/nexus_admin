const searchBar = document.querySelector('.search-filter');
const deleteBtn = document.querySelectorAll('.delete-btn');
const categoriesDeleteBtn = document.querySelectorAll('.categories-delete-btn');
const accountType = document.querySelectorAll('.account-type');
const loginForm = document.querySelector('.login-form');
const loader = document.querySelector('.loader');
const dropBtn = document.querySelector('.btn-drop');
const filterBtn = document.querySelector('.filter-btn');
const megaCheckBox = document.querySelector('.mega-check');
const activeBtn = document.querySelectorAll('.active-btn');
const msg = document.querySelector('.msg');
const dataMsg = document.querySelector('.data-msg');
let _token = document.querySelector('meta[name]').attributes.name.value;

if (megaCheckBox)
    megaCheckBox.addEventListener('click', (e) => {
        let allChecks = document.querySelectorAll('.user-check');
        // console.log(allChecks)

        allChecks.forEach(check => {
            check.checked = megaCheckBox.checked === true;
            // let checkedValue = check.checked
        });


    });


if (accountType) {
    accountType.forEach(account => {
        let formData = new FormData();
        formData.append('_token', _token)
        formData.append('_account', account.dataset.account);
        fetch('http://localhost:8000/accounts/fetch', {
            method: 'POST',
            body: formData
        }).then(res => res.json()).then(data => {
            account.innerText = data;
        })
    })
}

if (deleteBtn) {
    deleteBtn.forEach(btn => {
        btn.addEventListener('click', (e) => {
            let id = e.target.dataset.id;
            console.log(_token)
            let formData = new FormData();
            formData.append('_token', _token)
            formData.append('_method', 'DELETE')

            fetch(`http://localhost:8000/accounts/${id}/delete`, {method: 'POST', body: formData}).then(res => {
                let status = res.status;
                if (status === 200)
                    location.reload();
                console.log(res)
            });
        })
    });
}

if (loginForm) {

    let method = 'POST',
        url = 'http://localhost:8000/user/authenticate'

    validateForm({form: loginForm, url: url, method: method, msg: msg});
}


if (categoriesDeleteBtn) {
    categoriesDeleteBtn.forEach(btn => {
        btn.addEventListener('click', (e) => {
            let id = e.target.dataset.categoryId;
            let formData = new FormData();
            formData.append('_token', _token)
            formData.append('_method', 'DELETE')
            // console.log(e.target)

            fetch(`http://localhost:8000/categories/${id}/delete`, {method: 'POST', body: formData}).then(res => {
                let status = res.status;
                if (status === 200)
                    location.reload();
                console.log(res)
            })
        });
    })
}

if (dropBtn) {

    let keyFrames = [
        {
            transform: 'translateY(20%)',
        },
        {
            transform: 'translateY(10%)',
        }
    ];

    let timing = {
        duration: 100
    }

    let dropDownContent = document.querySelector('.user-links');
    dropBtn.addEventListener('click', (e) => {
        console.log(dropDownContent)

        dropDownContent.animate(keyFrames, timing).finished.then(() => setTimeout(() => {
            dropDownContent.style.transform = 'translateY(10%)';
        }, 10))


        // dropDownContent.style.display = 'block';
        // dropDownContent.style.transition = 'transform .5s ease-in-out ';

    });

    // const userLinks = document.querySelector('.user-links');
    document.addEventListener('click', (e) => {
        let isDroppedDown = e.target.matches('.btn-drop');

        if (!isDroppedDown && e.target.closest('.drop-down-container') === null) {
            dropDownContent.style.display = 'none';
        } else {
            dropDownContent.style.display = 'block';
        }
    });


}

if (filterBtn) {
    let keyFrames = [
        {
            opacity: 0,
        },
        {
            opacity: 1,
        }
    ];

    let timing = {
        duration: 500
    }

    let filter = document.querySelector('.filter')
    filterBtn.addEventListener('click', (e) => {
        // console.log(dropDownContent)
        const filterAnim = filter.animate(keyFrames, timing);
        filterAnim.finished.then(() => setTimeout(() => {
            filter.style.opacity = '1';
        }, 100))
    });
    document.addEventListener('click', (e) => {
        let isDroppedDown = e.target.matches('.filter-btn');

        if (!isDroppedDown && e.target.closest('.filter-container') === null) {
            filter.style.display = 'none';
        } else {
            filter.style.display = 'block';
        }
    });
}

if (activeBtn) {
    activeBtn.forEach(btn => {
        btn.addEventListener('dblclick', (e) => {
            console.log(e);

            let userId = e.target.dataset.userId;

            let formData = new FormData();
            formData.append('_token', _token);
            formData.append('user_id', userId)

            fetch('http://localhost:8000/users/activate', {method: 'POST', body: formData}).then(res => {
                let status = res.status;
                if (status === 200)
                    location.reload();
            })
        });
    });
}

if (searchBar) {
    searchBar.addEventListener('input', (e) => filter(e.target.value, dataMsg));

    const filter = (searchTerm, msg) => {
        let items = document.querySelectorAll('.data');
        // console.log(items);
        let searchItems = [];

        searchItems.push(items);
        // console.log(searchItems)
        let searched = [];
        searchItems.forEach(item => {

            item.forEach(data => {
                if (data.innerText.toLowerCase().includes(searchTerm.toLowerCase())) {
                    data.classList.remove('d-none');
                    msg.nextElementSibling.classList.remove('d-none');
                    searched.push(data);
                    console.log('Working!!!');
                } else {
                    data.classList.add('d-none');
                }

                if (!searched.length) {
                    msg.nextElementSibling.classList.add('d-none');
                    msg.innerHTML = '<p class="text-danger m-auto fs-1">No Results match Your Search</p>'
                    msg.classList.remove('d-none');
                } else {
                    msg.classList.add('d-none');
                }

            })
        });

    };
}
