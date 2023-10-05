let status;

const validateOptions = [
    {
        isValid: input => input.value.trim() !== '',
        msg: input => `${(input.name).charAt(0).toUpperCase() + (input.name).slice(1)} Is Not Valid`
    },
];

const validateForm = ({form, url, method, msg}) => {
    // let validateTrue = loginForm.dataset.validate === 'validate';
    let errorBag = {};
    errorBag[form.id] = {};

    const validateSingleForm = (formGroup) => {
        let field = formGroup;
        let id = field.id
        const fieldParent = field.parentElement
        // let error = false;
        let msgContainer = fieldParent.querySelector('p')
        for (const options of validateOptions) {
            if (!options.isValid(field)) {
                field.value = '';
                msgContainer.innerText = options.msg(field);
                errorBag.form[id] = options.msg(field)
                console.log(errorBag)
            } else {
                delete errorBag[form.id][id]
                console.log(errorBag)
            }
        }

    }


    const validateFormGroup = (formsToBeValidated) => {
        let formGroups = Array.from(formsToBeValidated.querySelectorAll('input[data-validate]'))

        formGroups.forEach(group => {
            validateSingleForm(group);
            console.log(group)
        });
    }

    // if (validateTrue) {
    // }
    form.addEventListener('submit', (e) => {
        e.preventDefault();
        let formData = new FormData(form);
        formData.append('_token', _token)
        validateFormGroup(form);
        if (!Object.keys(errorBag[form.id]).length) {
            msg.innerText = '';
            fetch(url, {method: method, body: formData}).then(res => {
                status = res.status;
                return res.json()

            }).then(data => {
                for (let i = 0; i < data.length; i++) {
                    if (status === 200)
                        location.href = data[i];
                    else {
                        if (status === 422) {
                            loader.classList.add('d-none');
                            msg.innerText = data[i];
                        }
                    }
                }
            });
        }
        loader.classList.remove('d-none');
        // console.log(body)
    });
};
