<template>
    <form id="wallIndexForm" class="askForm" method="post">
        <div class="textBlock bg-white p-2 position-relative mh-4 rounded-small mt-4 lg:mt-0">
        <textarea
            placeholder="Задать вопрос всем пользователям.."
            data-limit="300" style="min-height:60px;height:20px"
            name="question"
            v-model="title"
            id="question_question_text">
        </textarea>
        </div>
        <div class="optionsBar d-flex p-4 gap-1 md:gap-4 flex-items-center justify-between">
            <div class="flex-1"><label for="shoutout_question_anonymous"></label></div>
            <div class="optionsBar-counter text-small"></div>
            <div class="lds-dual-ring" v-if="isElVisible"></div>
            <button name="button" type="submit" @click.prevent="multiplyActions()"
                    class="btn btn-danger min-w-0 icon-send rsp-eql-desktop"
                    style="width: 100px">Отправить
            </button>
        </div>
    </form>
</template>

<script>
export default {
    name: 'QuestComponent',
    props: [
        'id_user'
    ],
    data() {
        return {
            isElVisible: false,
            title: null
        }
    },
    methods: {
        multiplyActions(){
            this.toggleElement();
            this.addQuest();
        },
        toggleElement() {
            this.isElVisible = true;
        },
        addQuest() {
            axios.post('/send_quest', {user_id: this.id_user, title: this.title}).then(res =>{
                this.title = "";
                this.isElVisible = false;
            })
        }
    }
}
</script>

