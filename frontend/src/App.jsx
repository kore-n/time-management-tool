import React from 'react';
import UserList from './components/UserList'; // コンポーネントをインポート

const App = () => {
  return (
    <div className="App">
      <UserList /> {/* ユーザー一覧を表示 */}
    </div>
  );
};

export default App;