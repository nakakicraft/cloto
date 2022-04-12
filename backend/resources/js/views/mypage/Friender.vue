<template>
  <v-container>
    <v-tabs color="#f6bf00">
      <v-tab class="font-weight-bold" @click="showFriends()">フォロー</v-tab>
      <v-tab class="font-weight-bold" @click="showFrienders()">フォロワー</v-tab>
    </v-tabs>

    <v-list v-if="frienders.length">
      <v-list-item
        v-for="friender in frienders"
        :key="friender.id"
        @click="$store.dispatch('dialog/open', { type: 'user', username: friender.username })"
      >
        <v-list-item-avatar>
          <v-img :src="$storage('icon') + friender.icon"></v-img>
        </v-list-item-avatar>

        <v-list-item-content>
          <v-list-item-title>
            {{ friender.handlename }}
            <small>@{{ friender.username }}</small>
          </v-list-item-title>
          <v-list-item-subtitle>
            {{ friender.introduction || '自己紹介が入力されていません。' }}
          </v-list-item-subtitle>
        </v-list-item-content>
      </v-list-item>
    </v-list>
    <p v-else>まだ誰もいないようです。</p>
  </v-container>
</template>

<script>
export default {
  head: {
    title() {
      return {
        inner: 'フォロー&フォロワー',
      };
    },
  },
  data() {
    return {
      frienders: [], // フォロー/フォロワー一覧
    };
  },
  computed: {
    authUser() {
      return this.$store.getters['auth/user'];
    },
  },
  methods: {
    /**
     * フォロー一覧の表示
     */
    showFriends: async function () {
       let response = await axios.get('/api/users/' + this.authUser.id + '/friends');
      this.frienders = response.data;
    },

    /**
     * フォロワー一覧の表示
     */
    showFrienders: async function () {
      let response = await axios.get('/api/users/' + this.authUser.id + '/frienders');
      this.frienders = response.data;
    },
  },
  created() {
    this.showFriends();
  },
};
</script>
