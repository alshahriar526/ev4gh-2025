const saveButton = document.getElementById('saveButton')
var editor = new EditorJS({

    holderID: 'editorjs',
    autofocus: true,
    tools: {
        header: {
            class: Header,
            inlineToolbar: ['link'],

            config: {
                placeholder: 'Header'
            },
            shortcut: 'CMD+SHIFT+H'
        },
        // images: {
        // class: ImageTool,
        // config: {
        // endpoints: {
        // byFile: 'http://localhost:8008/uploadFile', // Your backend file uploader endpoint
        // byUrl: 'http://localhost:8008/fetchUrl', // Your endpoint that provides uploading by Url
        // }
        // }
        // },
        // image: {
        // class: SimpleImage,
        // inlineToolbar: ['link']
        // },
        list: {
            class: List,
            inlineToolbar: true,
            shortcut: 'CMD+SHIFT+L'
        },
        checklist: {
            class: Checklist,
            inlineToolbar: true
        },
        quote: {
            class: Quote,
            inlineToolbar: true,
            config: {
                quotePlaceholder: 'Enter a quote',
                captionPlaceholder: "Quote's author"
            },
            shortcut: 'CMD+SHIFT+O'
        },
        warning: Warning,
        marker: {
            class: Marker,
            shortcut: 'CMD+SHIFT+M'
        },
        code: {
            class: CodeTool,
            shortcut: 'CMD+SHIFT+C'
        },
        delimiter: Delimiter,
        inlineCode: {
            class: InlineCode,
            shortcut: 'CMD+SHIFT+C'
        },
        linkTool: LinkTool,
        embed: Embed,
        table: {
            class: Table,
            inlineToolbar: true,
            shortcut: 'CMD+ALT+T'
        }
    },
    data: {
        blocks: [{
                type: 'header',
                data: {
                    text: 'Title',
                    level: 2
                }
            },
            // {
            // id : "4Pi4XD0cD1",
            // type : "image",
            // data : {
            // caption : "",
            // withBorder : false,
            // stretched : false,
            // withBackground : false
            // }
            // },

            {
                "id": "vGl_ywCg5r",
                "type": "paragraph",
                "data": {
                    "text": "Tell your story"
                }

            }

        ]
    },
    onReady: function () {
        saveButton.click()
    },
    onChange: function () {
        console.log('something is changinggggggggg')
    }
})
saveButton.addEventListener('click', function () {
    editor.save().then((savedData) => {
        var output = document.getElementById('output')
        var createNode = document.createElement('div')
        console.log(Object.keys(savedData.blocks).length)
        for (i = 0; i < Object.keys(savedData.blocks).length; i++) {
            createNode.innerHTML += savedData.blocks[i].data.text + '<br>'
        }
        output.appendChild(createNode)
    })
})
