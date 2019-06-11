window.addEventListener('load', () => {
    const inputs = document.querySelectorAll('input, select');

    const inpLen = inputs.length
    for (let i = 0; i < inpLen; i++) {
        if (inputs[i].hasAttribute('required')) {
            const children = inputs[i].parentElement.children;
            let destChild = null;

            for (let i = children.length - 1; i > 0; i--)
            {
                if (children[i].tagName == 'SPAN'){
                    destChild = children[i];
                    break;
                }
            }

            inputs[i].addEventListener('invalid', function (e) {
                e.preventDefault();
                if (!this.classList.contains('is-invalid'))
                    this.classList.add('is-invalid');

                if(destChild != null)
                    destChild.innerHTML = "Dit veld is verplicht.";
            });
            inputs[i].addEventListener('input', function () {
                if (this.classList.contains('is-invalid'))
                    this.classList.remove('is-invalid');
                if(destChild != null)
                    destChild.innerHTML = "";
            })
        }
    }
});
